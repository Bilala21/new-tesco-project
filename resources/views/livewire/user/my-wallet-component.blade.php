<div class="main-content">
    <section class="section">
      <div class="row ">
        <div class="col-md-4">
          <div class="card">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15">Margin Available Balance</h5>
                      <h2 class="mb-3 font-18">$25888</h2>
                      <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                      <img src="{{asset('./userAssets/assets/img/banner/1.png')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15">Margin Freeze Balance</h5>
                      <h2 class="mb-3 font-18">1,287</h2>
                      <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                      <img src="{{asset('./userAssets/assets/img/banner/2.png')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15">Wallet Balance</h5>
                      <h2 class="mb-3 font-18">$128987</h2>
                      <p class="mb-0"><span class="col-green">18%</span>
                        Increase</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                      <img src="{{asset('./userAssets/assets/img/banner/3.png')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>



      <div class="row">
        <div class="col-md-3">
          <div class="card" style="
          height: 130px;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column; cursor: pointer;">
            <div class="user-icon align-items-center justify-content-center">
              <i class="fa-solid fa-circle-plus" style="font-size: 40px;"></i>
            </div>
            <span class="mt-2" style="font-size: 23px; color: rgb(27, 27, 209);font-weight: 600;">Deposit</span>
        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card" style="
                        height: 130px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column; cursor: pointer;">
                          <div class="user-icon align-items-center justify-content-center">
                            <i class="fa-solid fa-circle-plus" style="font-size: 40px;"></i>
                          </div>
                          <span class="mt-2" style="font-size: 23px; color: rgb(27, 27, 209);font-weight: 600;">Withdraw</span>
                      </div>
                                    </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h4>Wallet Recharge History</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills" id="myTab3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                aria-controls="home" aria-selected="true">Recharge Record</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                aria-controls="profile" aria-selected="false">Offline Recharge Record</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                aria-controls="contact" aria-selected="false">Withdraw History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="commission-tab4" data-toggle="tab" href="#commission4" role="tab"
                aria-controls="commission" aria-selected="false">Commission Details</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="margin-tab5" data-toggle="tab" href="#margin5" role="tab"
                aria-controls="margin" aria-selected="false">Margin Details</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="wallet-tab6" data-toggle="tab" href="#wallet6" role="tab"
                aria-controls="margin" aria-selected="false">Wallet Details</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent2">
            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>TXN ID</th>
                      <th>Approval</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th>TXN ID</th>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Payment Method</th>
                      <th>Approval</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#8746584</td>
                      <td>02-09-2023</td>
                      <td>$334.00</td>
                      <td>USDT-TRC20</td>
                      <td>
                        <div class="badge badge-success">Approved</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#8746584</td>
                      <td>02-09-2023</td>
                      <td>$334.00</td>
                      <td>
                        <div class="badge badge-success">Paid</div>
                      </td>
                      <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, atque?</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="commission4" role="tabpanel" aria-labelledby="commission-tab4">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Total Num</th>
                      <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="margin5" role="tabpanel" aria-labelledby="margin-tab5">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Amount</th>
                      <th>Total Num</th>
                      <th>Type</th>
                      <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                    <td>1</td>
                    <td>	$5,000.00</td>
                    <td>	$5,000.00</td>
                    <td>Buy VIP</td>
                    <td>30, August 2023</td>
                   </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="wallet6" role="tabpanel" aria-labelledby="wallet-tab6">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Amount</th>
                      <th>Total Num</th>
                      <th>Type</th>
                      <th>Date</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                    <td>1</td>
                    <td>	$5,000.00</td>
                    <td>	$5,000.00</td>
                    <td>Withdraw</td>
                    <td>30, August 2023</td>
                   </tr>
                  </tbody>
                </table>
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