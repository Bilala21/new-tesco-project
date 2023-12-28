<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>All Products</h4>
                <a href="{{route('admin.addproduct')}}" class="btn btn-primary">Add Product</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Stock</th>
                        <th>Price</th>
                        {{-- <th>Description</th> --}}
                        <th>Date</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->stock_status}}</td>
                        <td>{{$product->regular_price}}</td>
                        {{-- <td>{{$product->description}}</td> --}}
                        <td>{{$product->created_at}}</td>
                        
                        <td>
                          <img src="{{asset('frontend/assets/images/products')}}/{{$product->image}}" alt="" width="80">
                        </td>
                        <td>
                          <a href="{{route('admin.editproduct',['product_slug' => $product->slug])}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                          <a href="" wire:click.prevent="deleteProduct({{$product->id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      @endforeach


                      
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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