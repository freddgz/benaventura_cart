  <div class="content-wrapper" ng-controller="ctr_dashboard">
    <!-- Content Header (Page header) -->
    <?= $menu_builded ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Dashboard</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <!-- <form class="form-inline" ng-submit="search()">
                    <div class="form-group">
                      <select class="form-control" ng-model="filters.opc" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option ng:repeat="opt in filters.opciones" value="{{opt.id}}">{{opt.descripcion}}</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label> </label>
                      <input type="text" class="form-control" ng-model="filters.texto" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Buscar</button>
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado</h3>
            </div>
            <div class="box-body">

            </div>
            <div class="overlay" ng-if="loading_list">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
          </div>
        </div>
      </div> -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script>
    $(document).ready(function() {

    });
  </script>