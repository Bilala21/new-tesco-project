<div class="main-content">
    <section class="section">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h6>All Uploaded Files</h6>
        <button class="btn btn-primary">Upload New FIle</button>
      </div>
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h6>All Files</h6>
          <div class="d-flex">
            <div class="dropdown d-inline mr-2">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Easy Dropdown
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Short By Newlest</a>
                <a class="dropdown-item" href="#">Short By Smallest</a>
                <a class="dropdown-item" href="#">Short By Largest</a>
                <a class="dropdown-item" href="#">Short By Oldest</a>

              </div>
            </div>

            <form class="form-inline">
              <input class="form-control" type="search" placeholder="Search Your Files" aria-label="Search">
              <button class="btn btn-outline-primary ml-2" type="submit">Search</button>
            </form>
          </div>
        </div>

        <div class="card-body">
         <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header justify-content-end">
                <div class="dropdown d-inline mr-2">
                  <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"></i>
                 
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-circle-info"></i> <span class="ml-2">Detail Info</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-download"></i> <span class="ml-2">Download</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-copy"></i> <span class="ml-2">Copy Link</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-trash-alt"></i> <span class="ml-2">Delete</span>
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body" style="background-color: aliceblue;">
                <img src="{{asset('./userAssets/assets/img/file1.jpg')}}" alt="" style="width: 260px;">
              </div>
              <div class="card-footer" style="line-height: 0px;">
                <p>photo_2023-08-31_20-18-56
                  .jpg</p>
                  <small>36.58 KB</small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header justify-content-end">
                <div class="dropdown d-inline mr-2">
                  <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"></i>
                 
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-circle-info"></i> <span class="ml-2">Detail Info</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-download"></i> <span class="ml-2">Download</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-copy"></i> <span class="ml-2">Copy Link</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-trash-alt"></i> <span class="ml-2">Delete</span>
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body" style="background-color: aliceblue;">
                <img src="{{asset('./userAssets/assets/img/file1.jpg')}}" alt="" style="width: 260px;">
              </div>
              <div class="card-footer" style="line-height: 0px;">
                <p>photo_2023-08-31_20-18-56
                  .jpg</p>
                  <small>36.58 KB</small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header justify-content-end">
                <div class="dropdown d-inline mr-2">
                  <i class="fa-solid fa-ellipsis-vertical" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"></i>
                 
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-circle-info"></i> <span class="ml-2">Detail Info</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-download"></i> <span class="ml-2">Download</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-copy"></i> <span class="ml-2">Copy Link</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="fa-solid fa-trash-alt"></i> <span class="ml-2">Delete</span>
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body text-center" style="background-color: aliceblue;">
                <img src="{{asset('./userAssets/assets/img/file2.jpg')}}" alt="" style="width: 120px; height: 80px; ">
              </div>
              <div class="card-footer" style="line-height: 0px;">
                <p>photo_2023-08-31_20-18-56
                  .jpg</p>
                  <small>36.58 KB</small>
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