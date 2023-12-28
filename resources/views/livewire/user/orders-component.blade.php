<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Orders</h4>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="dropdown d-inline mr-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Filter By Payment
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Paid</a>
                      <a class="dropdown-item" href="#">Unpaid</a>
  
                    </div>
                  </div>

                  <div class="dropdown d-inline mr-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Filter By Deliver
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Pending</a>
                      <a class="dropdown-item" href="#">Confirmed</a>
                      <a class="dropdown-item" href="#">On Delivery</a>
                      <a class="dropdown-item" href="#">Delivered</a>
  
                    </div>
                  </div>
  
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Order code</th>
                        <th>Num.of Products</th>
                        <th>Customer</th>
                        <th>Base Price</th>
                        <th>Commissions</th>
                        <th>Delivery Status</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input type="checkbox" class="form-control">
                        </td>
                        <td>1</td>
                        <td>20230830-11100813</td>
                        <td>1</td>
                        <td>*****12</td>
                        <td>$1233.99</td>
                        <td>$32.99</td>
                        <td>
                          <div class="badge badge-info">Delivered</div>
                        </td>
                        <td>
                          <div class="badge badge-success">Paid</div>
                        </td>
                        <td>
                          <button class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                          </button>
                        </td>
                        
                      </tr>

                      <tr>
                        <td>
                          <input type="checkbox" class="form-control">
                        </td>
                        <td>1</td>
                        <td>20230830-11100813</td>
                        <td>1</td>
                        <td>*****12</td>
                        <td>$1233.99</td>
                        <td>$32.99</td>
                        <td>
                          <div class="badge badge-info">Delivered</div>
                        </td>
                        <td>
                          <div class="badge badge-danger">Un-paid</div>
                        </td>
                        <td>
                          <button class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                          </button>
                        </td>
                        
                      </tr>

                      <tr>
                        <td>
                          <input type="checkbox" class="form-control">
                        </td>
                        <td>1</td>
                        <td>20230830-11100813</td>
                        <td>1</td>
                        <td>*****12</td>
                        <td>$1233.99</td>
                        <td>$32.99</td>
                        <td>
                          <div class="badge badge-info">Delivered</div>
                        </td>
                        <td>
                          <div class="badge badge-success">Paid</div>
                        </td>
                        <td>
                          <button class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                          </button>
                        </td>
                        
                      </tr>

                      
                      
                      
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