 <?php 
// fillter
$keySelect = isset($this->request['fillter-status']) ? $this->request['fillter-status'] : "default";
$select_status = Helper::create_select(['default' => '-- Select status', 'active' => 'Kích hoạt', 'inactive' => 'Chưa kích hoạt'], $keySelect);

$search_value = isset($this->request['search_value']) ? htmlspecialchars($this->request['search_value']) : "";
$search_column = isset($this->request['search_column']) ? $this->request['search_column'] : "all";

$tr = '';
foreach($this->items as $key => $item){
  $id = $item['id'];
  $name = Helper::showHightlight($item['name'], $search_value);
  $email = Helper::showHightlight($item['email'], $search_value);
  $picture = DIR_UPLOAD.'user/thumb/' . $item['picture'];

  $link = URL::createLink('admin',$this->request['controller'],'ajaxStatus', [ 'id' => $id, 'status' => $item['status'] ]);
  $status = Helper::show_status($id,$item['status'], $link);
  $created = date("d-m-Y",$item['created_at']);
  $updated = date("d-m-Y",$item['updated_at']);

  $linkEdit = URL::createLink('admin',$this->request['controller'],'form', [ 'id' => $id ]);
  $tr .= ' <tr>
            <td><input type="checkbox" name="cid[]" value="'.$id.'"></td>
            <td>'.Helper::showHightlight($id,$search_value).'</td>
            <td><a href="'.$linkEdit.'">'.$name.'</a></td>
            <td>'.$email.'</td>
            <td><img src="'.$picture.'" style="width=100px"></td>
            <td>'.$status.'</td>
            <td>'.$created.'</td>
            <td>'.$updated.'</td>
          </tr>';
}


 ?> 

  <div class="content-wrapper" style="min-height: 228px;">
    <?php echo Helper::render_admin_header('User::List') ?>
    <form id="frmData" action="#" method="POST">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-center">
              <div class="card-body">
                <a class="btn btn-app" href="<?php echo URL::createLink('admin',$this->request['controller'],'index') ?>">
                  <i class="fas fa-redo-alt"></i> Reload
                </a>
                <a href="<?php echo URL::createLink('admin',$this->request['controller'],'form') ?>" class="btn btn-app">
                  <i class="fas fa-plus"></i> Add
                </a>
                <a onclick="submitFormComfirm('<?php echo URL::createLink('admin',$this->request['controller'],'trash') ?>')"  class="btn btn-app">
                  <i class="fas fa-minus"></i> Delete
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-12">
            <div class="card">
            <?php Helper::showFlash('error'); ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="fillter">
                  <div class="row">
                    <div class="col-md-3">
                       <div class="form-group">
                        <select class="form-control" name="fillter-status">
                          <?php echo $select_status; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="input-group mb-3">
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tìm <?php echo $this->searchLabel[$search_column]; ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php 
                          $list = '';
                          foreach($this->search_accepted as $key => $value){
                            $label = $this->searchLabel[$value];
                            $list .= '<a onclick="changeColumn(\''.$value.'\', this)" class="dropdown-item" href="javascript:void(0)">Tìm '.$label.'</a>';
                          }
                          echo $list;
                        ?>
                        </div>
                      </div>
                        <input type="hidden" name="search_column" value="<?php echo $search_column ?>">
                        <input name="search_value" type="text" class="form-control" value="<?php echo $search_value ?>">
                        <div class="input-group-append">
                          <a class="input-group-text" id="basic-addon2" href="javascript:search()">Tìm kiếm</a>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
                <table class="table table-bordered data-table">
                  <thead>                  
                    <tr>
                      <th style="width: 10px"><input id="check-all" type="checkbox"></th>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Picture</th>
                      <th>Status</th>
                      <th>Created</th>
                      <th>Updated</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php echo $tr ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <?php echo $this->pagination->show(); ?>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
    </form>
  </div>