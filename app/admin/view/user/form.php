<?php 

  $select_status = ['default' => '-- Select status', 'active' => 'Kích hoạt', 'inactive' => 'Chưa kích hoạt'];

?>
  <div class="content-wrapper" style="min-height: 228px;">
  <?php echo Helper::render_admin_header('User::Form') ?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-center">
              <div class="card-body">
                <a class="btn btn-app" href="<?php echo URL::createLink('admin',$this->request['controller'],'index') ?>">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                <a onclick="submitForm('<?php echo URL::createLink('admin',$this->request['controller'],'save',['type' => 'save']) ?>')" class="btn btn-app">
                    <i class="fas fa-save"></i> Save
                </a>
                <a onclick="submitForm('<?php echo URL::createLink('admin',$this->request['controller'],'save',['type' => 'close']) ?>')" class="btn btn-app">
                    <i class="fas fa-share-square"></i> Save & Close
                </a>
                <a onclick="submitForm('<?php echo URL::createLink('admin',$this->request['controller'],'save',['type' => 'new']) ?>')" class="btn btn-app">
                    <i class="fas fa-file-download"></i> Save & New
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
              <form id="frmData" role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input value="<?php echo isset($this->item['name']) ? $this->item['name'] : "" ?>" name="form[name]" type="text" class="form-control"  placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input value="<?php echo isset($this->item['username']) ? $this->item['username'] : "" ?>" name="form[username]" type="text" class="form-control"  placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input value="<?php echo isset($this->item['email']) ? $this->item['email'] : "" ?>" name="form[email]" type="text" class="form-control"  placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="form[password]" type="text" class="form-control"  placeholder="Enter password">
                  </div>
                  <div class="form-group">
                    <label>Re-Password</label>
                    <input name="repass" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                        <label>Status</label>
                        <select name="form[status]" class="custom-select">
                        <?php echo Helper::create_select($select_status, $this->item['status']) ?>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="picture" type="file" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <?php if(isset($this->request['id'])) {?>
                      <div class="preview_img">
                          <img src="<?php echo  DIR_UPLOAD.'user/standard/' . $this->item['picture'] ?>">
                      </div>
                      <input type="hidden" name="id" value="<?php echo $this->request['id'] ?>">
                      <input type="hidden" name="hidden_picture" value="<?php echo $this->item['picture'] ?>">
                      <?php } ?>
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>