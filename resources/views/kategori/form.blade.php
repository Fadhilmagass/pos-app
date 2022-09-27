  <div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog">
          <form action="" method="POST" class="form-horizontal">
              @csrf
              @method('post')
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title"></h5>
                      <button type="button" class="btn-close" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group row">
                          <label for="nama_kategori" class="col-md-2 col-md-offset-1 control-label">Kategori</label>
                          <div class="col-md-9">
                              <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                                  required autofocus>
                              <span class="help-block with-errors"></span>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-sm btn-flat btn-primary">Simpan</button>
                      <button type="button" class="btn btn-sm btn-flat btn-danger" data-dismiss="modal"><i
                              class="fa fa-arrow-circle-left"></i> Batal</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
