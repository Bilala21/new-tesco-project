<div class="main-content">
    <section class="section">
      <div class="section-body">
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Edit Product</h4>
            <a href="{{route('admin.products')}}" class="btn btn-primary">All Products</a>
          </div>

         

          <div class="card-body">
            <form action="" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
              <div class="row">
                <div class="form-group col-md-6 mb-3">
                  <label for="">Categories</label>
                  <select name="" id="" class="form-control" wire:model="category_id">
                    <option value="">-- Select Category --</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                   
                  </select>
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" wire:model="name" wire:keyup="generateSlug">
                  </div>

                <div class="form-group col-md-6 mb-3">
                  <label for="">Product Slug</label>
                  <input type="text" class="form-control" placeholder="Enter Product Slug" wire:model="slug">
                </div>

                <div class="form-group col-md-6 mb-3">
                  <label for="">Regular Price</label>
                  <input type="text" class="form-control" placeholder="Enter Regular Price" wire:model="regular_price">
                </div>
                <div class="form-group col-md-3 mb-3">
                  <label for="">Sale Price</label>
                  <input type="text" class="form-control" placeholder="Enter Sale Price" wire:model="sale_price">
                </div>

                <div class="form-group col-md-3 mb-3">
                    <label for="">SKU</label>
                    <input type="text" class="form-control" placeholder="Enter SKU" wire:model="SKU">
                  </div>

                  <div class="form-group col-md-3 mb-3">
                    <label for="">Stock</label>
                    <select name="" id="" class="form-control" wire:model="stock_status">
                        <option value="instock">Instock</option>
                        <option value="outofstock">Out of Stock</option>
                    </select>
                  </div>

                  <div class="form-group col-md-3 mb-3">
                    <label for="">Featured</label>
                    <select name="" id="" class="form-control" wire:model="featured">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter Quantity" wire:model="quantity">
                  </div>

                <div class="form-group col-md-6 mb-3">
                  <label for="">Image</label>
                  <input type="file" class="form-control" wire:model="newimage">
                  @if($newimage)
                  <img src="{{$newimage->temporaryUrl()}}" alt="" width="120" class="mt-4"/>
                  @else 
                  <img src="{{asset('frontend/assets/images/products')}}/{{$image}}" alt="" width="120" class="mt-4">
                  @endif
                </div>

                <div class="form-group col-md-12 mb-3">
                    <label for="">Short Description</label>
                    <textarea name="" id="" cols="30" rows="2" class="form-control" wire:model="short_description"></textarea>
                  </div>

                <div class="form-group col-md-12 mb-3">
                  <label for="">Description</label>
                  <textarea name="" id="" cols="30" rows="3" class="form-control" wire:model="description"></textarea>
                </div>

                <div class="form-group col-md-6 mb-3">
                  <label for=""></label>
                  <input type="button" class="form-control bg-danger" value="Reset" readonly style="color: #fff; font-weight: 600;">
                </div>

                <div class="form-group col-md-6 mb-3">
                  <label for=""></label>
                  <input type="submit" class="form-control bg-primary" value="Update" readonly style="color: #fff; font-weight: 600;">
                </div>

                

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Setting Panel
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                <span class="selectgroup-button">Light</span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                <span class="selectgroup-button">Dark</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
              </label>
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="mini_sidebar_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Mini Sidebar</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                  id="sticky_header_setting">
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Sticky Header</span>
              </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
              <i class="fas fa-undo"></i> Restore Default
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>