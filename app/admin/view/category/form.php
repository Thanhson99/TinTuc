<?php 

  $select_status = ['default' => '-- Select status', 'active' => 'Kích hoạt', 'inactive' => 'Chưa kích hoạt'];

?>
  <div class="content-wrapper" style="min-height: 228px;">
  <?php echo Helper::render_admin_header('Category::Form') ?>
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
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="profile" aria-selected="false">Meta</a>
                  </li>
                 
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="card-body">
                        <div class="form-group">
                          <label>Name</label>
                          <input  onchange="changeSlug(this)" value="<?php echo isset($this->item['name']) ? $this->item['name'] : "" ?>" name="form[name]" type="text" class="form-control"  placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label>Desscription</label>
                          <textarea name="form[description]" class="form-control" name="" id="" cols="30" rows="3"><?php echo isset($this->item['description']) ? $this->item['description'] : "" ?></textarea>
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
                                <img src="<?php echo  DIR_UPLOAD.'category/standard/' . $this->item['picture'] ?>">
                            </div>
                            <input type="hidden" name="id" value="<?php echo $this->request['id'] ?>">
                            <input type="hidden" name="hidden_picture" value="<?php echo $this->item['picture'] ?>">
                            <?php } ?>
                        </div>
                        
                      </div>
                    </div>
                    <div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="profile-tab">
                     <div class="form-group">
                        <label>Slug</label>
                        <input id="slug" value="<?php echo isset($this->item['slug']) ? $this->item['slug'] : "" ?>" name="form[slug]" type="text" class="form-control">
                      </div>
                       <div class="form-group">
                        <label>Meta Title</label>
                        <input value="<?php echo isset($this->item['meta_title']) ? $this->item['meta_title'] : "" ?>" name="form[meta_title]" type="text" class="form-control"  placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label>Meta Desscription</label>
                        <textarea name="form[meta_description]" class="form-control" name="" id="" cols="30" rows="3"><?php echo isset($this->item['meta_description']) ? $this->item['meta_description'] : "" ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Meta Keywords</label>
                        <input value="<?php echo isset($this->item['meta_keywords']) ? $this->item['meta_keywords'] : "" ?>" name="form[meta_keywords]" type="text" class="form-control"  placeholder="Enter keywords">
                      </div>
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