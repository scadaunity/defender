<?php

namespace ScadaUnity\Database;

use ScadaUnity\Database\Schema;
use ScadaUnity\Database\QueryBuilder;

/**
 *  Classe responsavel por realizar a migrações no bancode dados
 */
class Migration
{
    /**
    * Mapeamento das migrações
    * @var array
    */
    private $map = [];

    /**
     * Diretório contendo os arquivos das migrações.
     * @var string
     */
    private $path;

    /**
     * Armazena todas as tabelas existentes no banco de dados;
     * @var array
     */
    private $tables;

    /**
     * Construtor da classe
     */
    public function __construct()
    {
        $this->path = ROOT.'/app/Database/Migrations/';
        $this->setMap();
        $this->tables = Schema::all();
    }

    /**
     * Metodo responsavel por mapear os arquivos de migração na pasta app/Database/Migrations.
     */
    public function setMap(){
    
        //VERIFICA SE EXISTE O DIRETÓRIO
        if(!is_dir($this->path)){
            return false;
        }

        //PROCURA OS ARQUIVOS DENTRO DO DIRETORIO
        $migrations = array_diff(
            scandir($this->path),
            ['.', '..']
        );

        //DEFINE O MAPA DAS MIGRAÇÕES COM O CAMINHO ABSOLUTO
        foreach ($migrations as $migration) {
            array_push($this->map,$this->path.$migration);
        }
    }
    /**
     * Metodo responsavel por executar as migrações.
     */
    public function migrate(){
        
        // VERIFICA SE A FILA ESTA VAZIA
        if (empty($this->map)) return false;
        
        //VERIFICA SE EXISTE A TABELA MIGRATIONS
        if(Schema::hasTable('migrations') == true){
            
            //percore a linhas da consulta no banco de dados
            foreach ($this->getMigrations() as $line) {
                // EXECUTA AS MIGRAÇÕES
                foreach ($this->map as $migration) {
                    d($line->migration);
                    d($migration);
                }
            }
        }
        
        // EXECUTA AS MIGRAÇÕES
        foreach ($this->map as $migration) {
            $file = require $migration;
            $file->up();
        }
    }

    public function rollback(){

        // VERIFICA SE A FILA ESTA VAZIA
        if (empty($this->map)) return false;

        // EXECUTA AS MIGRAÇÕES
        foreach ($this->map as $migration) {
            $file = require $migration;
            $file->down();
        }
    }

    /**
     * Metodo responsavel por buscar as migrações do banco de dados
     * 
     */
    private function getMigrations()
    {
        $db = new QueryBuilder();
        return $db->all('migrations');
    }


}
