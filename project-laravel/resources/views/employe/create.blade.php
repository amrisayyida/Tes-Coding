<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel16" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel16">Tambahkan Employe</h4>
            <button type="button" class="close" data-bs-dismiss="modal"
            aria-label="Close">
            <i data-feather="x"></i>
            </button>
        </div>
        <form action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name=""  placeholder="Full Name ..." >   
                            </div>
                            <div class="form-group">
                                <label>Mobile Phone</label>
                                <input type="number" class="form-control" name=""  placeholder="Mobile Phone ..." >   
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="number" class="form-control" name=""  placeholder="Email ..." >   
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="" placeholder="Tanggal Lahir ..." >   
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="" placeholder="Alamat ..." >   
                            </div>
                            
                        </div>
                        
                        </button>
                        <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Tambahkan
                        </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>