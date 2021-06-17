<?php ?>
<div id="page-right-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

        <div class="m-b-20 table-responsive">

            <h2>Logs de serviço</h2>
<hr>

           <div style="overflow: auto !important; height: 350px">
              <?php
                  if (file_exists('./src/Logs/server.txt')) {
                      $lista = file_get_contents('./src/Logs/server.txt');
                      $lista_array = explode("\n", $lista);
                      foreach($lista_array as $lista_item) {
                          echo $lista_item.'<br/>';
                      }
                  } else {
                      $lista = null;
                  }
              ?>
           </div>
<hr>
            <div class="pull-right">
                <a href="" type="button" class="btn btn-default"><i class="mdi mdi-cloud-download" ></i> Baixar logs</a>
            </div>

        </div>
    </div>
</div>
            </div>
        </div>

