<?php
    include'tmp/header.php';
?>


<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Omari Land </h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search By Ref">
                                                            </div>
                                                        </li>
                                                        
                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>ADD</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block" id="clickhere">
                                    <div class="card">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list">
                                                    <div class="nk-tb-item nk-tb-head" id="headtable">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                                                        <div class="nk-tb-col"><span>Price</span></div>
                                                        <div class="nk-tb-col"><span>Ref</span></div>
                                                        <div class="nk-tb-col"><span>Type</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span>Adress</span></div>
                                                        <div class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li class="mr-n1">
                                                                    <div class="dropdown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update Stock</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-invest"></em><span>Update Price</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    
                                                    
                                                   
                                                </div><!-- .nk-tb-list -->
                                            </div>
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    <div class="g">
                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>
                                                            <div>
                                                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                    <option value="page-1">1</option>
                                                                    <option value="page-2">2</option>
                                                                    <option value="page-4">4</option>
                                                                    <option value="page-5">5</option>
                                                                    <option value="page-6">6</option>
                                                                    <option value="page-7">7</option>
                                                                    <option value="page-8">8</option>
                                                                    <option value="page-9">9</option>
                                                                    <option value="page-10">10</option>
                                                                    <option value="page-11">11</option>
                                                                    <option value="page-12">12</option>
                                                                    <option value="page-13">13</option>
                                                                    <option value="page-14">14</option>
                                                                    <option value="page-15">15</option>
                                                                    <option value="page-16">16</option>
                                                                    <option value="page-17">17</option>
                                                                    <option value="page-18">18</option>
                                                                    <option value="page-19">19</option>
                                                                    <option value="page-20">20</option>
                                                                </select>
                                                            </div>
                                                            <div>OF 102</div>
                                                        </div>
                                                    </div><!-- .pagination-goto -->
                                                </div><!-- .nk-block-between -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                                <div  class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">New  Immeuble</h5>
                                            <div class="nk-block-des">
                                                <p>Add information of new Immeuble .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a id="nav1" class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Summary</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a id="nav2" class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>information</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a id="nav3" class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-file-img"></em><span>Files</span></a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem5">
                                                        <div class="nk-block">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="titre">Title </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="titre">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Desc">Description</label>
                                                                        <div class="form-control-wrap">
                                                                            <textarea class="form-control no-resize" id="Desc"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-mb-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Prix">Price</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Prix">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        
                                                                <div class="col-mb-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Supericie">Meters</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Supericie">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Statu">Statu</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-control" id="Statu">
                                                                                <option value="vente">vente</option>
                                                                                <option value="locationld">location long duree</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Adresse">Adress</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Adresse">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Video">idVideo</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Video">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem6">
                                                        <label class="form-label">fulfill the characteristics of Immeuble</label><br><br>
                                                        <div class="nk-block">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Bedrooms">Bedrooms</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Bedrooms">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-mb-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Bathrooms">Bathrooms</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Bathrooms">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        
                                                                <div class="col-mb-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Levels">Levels</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Levels">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="kitchen">kitchen</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="kitchen">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Dining">Dining Room</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Dining">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Living">Living Room</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Living">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="AC">AC</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-control" id="AC">
                                                                                <option value="Yes">Yes</option>
                                                                                <option value="No">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Parking">Parking</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Parking">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Internet">Internet</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-control" id="Internet">
                                                                                <option value="Yes">Yes</option>
                                                                                <option value="No">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        

                                                    </div>
                                                    <div class="tab-pane" id="tabItem7">
                                                        <label class="form-label">Files </label><br><br>
                                                        <div class="col-12">
                                                            <div class="custom-file">
                                                                        <input type="file" multiple class="custom-file-input" id="customFile">
                                                                        <label class="custom-file-label" for="customFile">Choose images</label>
                                                                    </div><br><br>
                                                                    <div class="custom-file">
                                                                        <input type="file" multiple class="custom-file-input" id="customFile3">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                     
                                                        </div><br><br>
                                                        <div class="col-12">
                                                            <button id="Ajouter" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

   <div class="modal fade" tabindex="-1" role="dialog" id="modalTabs">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h4 class="title">update information</h4>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabItem1">Summary</a>
                        </li>
                       
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem1">
                            
                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="titre1">Title</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="titre1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-mb-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Prix1">Price</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Prix1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-mb-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Supericie1">Meters</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Supericie1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Bedrooms">Bedrooms</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Bedrooms">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="bathroom"> bathroom</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="bathroom">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Adresse1">Adress</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="Adresse1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                            <button id="Modifer" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Modify</span></button>
                                                        </div>
                                                                
                                                                
                                                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalimage">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-md">
                    <h4 class="title">update images of immeuble</h4>
                    <div class="row" id="imageriad">
                        
                    </div>
                    <div class="custom-file" style="display: none;">
                        <input type="file" multiple class="custom-file-input" id="customFile2">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="modalAlert">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Congratulations!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">You’ve successfully Add <strong>your product</strong> to your <strong>store</strong> </div>
                            
                        </div>
                        <div class="nk-modal-action">
                            <a href="#" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal" id="Ok">OK</a>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                
            </div>
        </div>
    </div>    
    <div class="modal fade" tabindex="-1" id="modalAlert2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-alert bg-danger"></em>
                        <h4 class="nk-modal-title">Alert!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">You want to delete this <strong>product</strong> from your <strong>store</strong> </div>
                            
                        </div>
                        <div class="nk-modal-action">
                            <a href="#" class="btn btn-lg btn-mw btn-secondary" data-dismiss="modal" id="No">No</a>
                            <a href="#" class="btn btn-lg btn-mw btn-danger" data-dismiss="modal" id="Yes">Yes</a>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                
            </div>
        </div>
    </div> 


<?php
    include'tmp/footer.php';
?>
<script src="./js/Riad/local.js"></script>

