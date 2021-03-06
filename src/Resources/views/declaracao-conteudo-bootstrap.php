<?php // phpcs:ignoreFile -- this is not a core file ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Declaração de Conteúdo Correios</title>
    </head>
    <body>
        <div class="container my-4">
            <div class="row">
                <div class="col-4">
                    <img class="img-fluid" src="https://cdn.awsli.com.br/188/188355/arquivos/correios-logo-5.png">
                </div>
                <div class="col-8">
                    <h2 class="text-right">Declaração de Conteúdo</h2>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
                    <div class="card">
                        <table class="table table-sm m-0">
                            <tbody>
                                <tr>
                                    <th class="force-w">Remetente:</th>
                                    <td colspan="3"><?php echo $remetente->getNome(); ?></td>
                                </tr>
                                <tr>
                                    <th class="force-w">CPF/CNPJ:</th>
                                    <td colspan="3"><?php echo $remetente->getDoc(); ?></td>
                                </tr>
                                <tr>
                                    <th>Endereço:</th>
                                    <td colspan="3"><?php echo $remetente->getEndereco(); ?></td>
                                </tr>
                                <tr>
                                    <th>Cidade/UF:</th>
                                    <td><?php echo $remetente->getCidade() . '/' . $remetente->getEstado(); ?></td>
                                    <th>CEP:</th>
                                    <td><?php echo $remetente->getCep(); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
                    <div class="card">
                        <table class="table table-sm m-0">
                            <tbody>
                            <tr>
                                <th class="force-w">Destinatário:</th>
                                <td colspan="3"><?php echo $destinatario->getNome(); ?></td>
                            </tr>
                            <tr>
                                <th class="force-w">CPF/CNPJ:</th>
                                <td colspan="3"><?php echo $destinatario->getDoc(); ?></td>
                            </tr>
                            <tr>
                                <th>Endereço:</th>
                                <td colspan="3"><?php echo $destinatario->getEndereco(); ?></td>
                            </tr>
                            <tr>
                                <th>Cidade/UF:</th>
                                <td><?php echo $destinatario->getCidade() . '/' . $destinatario->getEstado(); ?></td>
                                <th>CEP:</th>
                                <td><?php echo $destinatario->getCep(); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
                    <table class="table table-sm table-bordered m-0">
                        <thead>
                            <tr class="thead-light">
                                <th colspan="3" class="text-center">Identificação dos Bens</th>
                            </tr>
                            <tr>
                                <th class="text-center">Discriminação do Conteúdo</th>
                                <th class="text-center">Quantidade</th>
                                <th class="text-center">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($itens->getItens() as $item) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $item->getDescricao(); ?></td>
                                    <td class="text-center"><?php echo (string)$item->getQuantidade(); ?></td>
                                    <td class="text-center"><?php echo (string)$item->getPeso(); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td class="text-right td-res font-weight-bold">Totais</td>
                                <td class="text-center"><?php echo $quantidadeTotal; ?></td>
                                <td class="text-center"><?php echo 'R$ ' . str_replace('.', ',', (string)$valorTotal); ?></td>
                            </tr>
                             <tr>
                                <td class="text-right td-res font-weight-bold"> Peso Total (kg)</td>
                                <td class="text-right" colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-sm table-bordered m-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">Declaração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2">
                                    <small>
                                        Declaro que não me enquadro no conceito de contribuinte previsto no art. 4º da Lei Complementar nº 87/1996, uma vez que não realizo,
                                        com habitualidade ou em volume que caracterize intuito comercial, operações de circulação de mercadoria, ainda que se iniciem no exterior,
                                        ou estou dispensado da emissão da nota fiscal por força da legislação tributária vigente, responsabilizando-me, nos termos da lei e a quem de
                                        direito, por informações inverídicas.
                                    </small>
                                    <small>
                                        Declaro ainda que não estou postando conteúdo inflamável, explosivo, causador de combustão espontânea, tóxico, corrosivo, gás ou
                                        qualquer outro conteúdo que constitua perigo, conforme o art. 13 da Lei Postal nº 6.538/78.
                                    </small>
                                    <br><br>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3 p-0">
                                                <p class="m-0 text-center" style="border-bottom: 1px solid #000;float:left;width:95%"><?php echo $remetente->getCidade(); ?></p>,
                                            </div>
                                            <div class="col-1 p-0">
                                                <p class="m-0 text-center" style="border-bottom: 1px solid #000;float:left;width:65%"><?php echo strftime('%d'); ?></p> de
                                            </div>
                                            <div class="col-2 p-0">
                                                <p class="m-0 text-center" style="border-bottom: 1px solid #000;float:left;width:75%;"><?php echo strftime('%B'); ?></p> de
                                            </div>
                                            <div class="col-1 p-0">
                                                <p class="m-0 text-center" style="border-bottom: 1px solid #000;"><?php echo strftime('%Y'); ?></p>
                                            </div>
                                            <div class="col-5">
                                                <p class="m-0" style="border-bottom: 1px solid #000;">&nbsp;</p>
                                                <p class="m-0 text-center">Assinatura do<br>Declarante/Remetente</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <table class="table table-sm m-0">
                            <thead>
                                <tr>
                                    <td style="border-top:0px;" colspan="2"><strong>Atenção:</strong> O declarante/remetente é responsável exclusivamente pelas informações declaradas.</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">Observações:</td>
                                </tr>
                                <tr>
                                    <td style="border-top:0px;"><small>Constitui crime contra a ordem tributária suprimir ou reduzir tributo, ou contribuição social e qualquer acessório (Lei 8.137/90 Art. 1o, V).</small></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <style type="text/css">
            * {
                -webkit-print-color-adjust: exact;
            }
            .td-res {
                background-color: #f0f0f0;
            }
            th.force-w {
                width: 270px !important;
            }
            @media print {
                .thead-light, .table .thead-light th {
                    background-color: #e9ecef !important;
                }
                .td-res {
                    background-color: #f0f0f0;
                }
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>
</html>
