
<div class="main-content">

    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Add Slider</h4>
                <a href="{{route('admin.homeslider')}}" class="btn btn-primary">All Sliders</a>
              </div>
              <div class="card-body">
                @if(Session::has('message'))
                <div class="alert alert-success mb-4" role="alert" style="border-radius: 4px;">{{Session::get('message')}}</div>
                @endif
             <form action="" wire:submit.prevent="addSlider" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group mb-3 col-md-6">
                        <label for="">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Slider Title" wire:model="title">
                      </div>

                      <div class="form-group mb-3 col-md-6">
                        <label for="">SubTitle</label>
                        <input type="text" class="form-control" placeholder="Enter Slider Sub Title" wire:model="subtitle">
                      </div>

                      <div class="form-group mb-3 col-md-6">
                        <label for="">Price</label>
                        <input type="text" class="form-control" placeholder="Enter Slider Price" wire:model="price">
                      </div>

                      <div class="form-group mb-3 col-md-6">
                        <label for="">Link</label>
                        <input type="text" class="form-control" placeholder="Enter Slider Link" wire:model="link">
                      </div>

                      <div class="form-group mb-3 col-md-6">
                        <label for="">Status</label>
                        <select name="" id="" class="form-control" wire:model="status">
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                      </div>
    
                      <div class="form-group col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" wire:model="image" wire:model="image">
                        @if($image)
                        <img src="{{$image->temporaryUrl()}}" alt="" width="120" class="mt-4"/>
                        @endif
                      </div>
                </div>
                
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
             </form>


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


