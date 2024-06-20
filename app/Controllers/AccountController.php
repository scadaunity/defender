<?php

namespace App\Controllers;

use ScadaUnity\Http\Request;

class AccountController
{
  /**
   * Metodo responsavel por listar todos os registros.
   *
   * @return \ScadaUnity\Framework\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Metodo responsavel por exibir o formulario para criação de um novo registro.
   *
   * @return \ScadaUnity\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Metodo responsavel por inserir um novo registro no banco de dados.
   *
   * @param \ScadaUnity\Http\Request $request
   * @param \App\Models\Account $account
   * @return \ScadaUnity\Http\Response
   */
  public function store(Request $request, $account)
  {
    //
  }

  /**
   * Metodo responsavel por exibir um registro especifico.
   *
   * @param \App\Models\Account
   * @return \ScadaUnity\Http\Response
   */
  public function show($account)
  {
    //
  }
  /**
   * Metodo responsavel por exibir o formulario de edição de um registro.
   *
   * @param \App\Models\Account
   * @return \ScadaUnity\Http\Response
   */
  public function edit($account)
  {
    //
  }
  /**
   * Metodo responsavel por alterar um registro.
   *
   * @param \ScadaUnity\Http\Request $request
   * @param \App\Models\Account $account
   * @return \ScadaUnity\Http\Response
   */
  public function update(Request $request, $account)
  {
    //
  }
  /**
   * Metodo responsavel por excluir um registro.
   *
   * @param \App\Models\Account
   * @return \ScadaUnity\Http\Response
   */
  public function destroy($account)
  {
    //
  }
}
