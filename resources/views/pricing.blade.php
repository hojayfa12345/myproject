@extends('welcome')

@section('content')
@php
$price=DB::table('prices')->first();
@endphp
<!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <h2 class="section-title mb-40 text-center">Pricing Table in Box</h2>
        <div class="pricing-wrapper">
          <div class="pricing-switcher-wrapper switcher">
            <div class="pricing-switchers">
              <div class="pricing-switcher pricing-switcher-active">Monthly</div>
              <div class="pricing-switcher">Yearly</div>
              <div class="switcher-button bg-default"></div>
            </div>
          </div>
          <div class="space60"></div>
          <div class="row no-gutters">
            <div class="col-md-4">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="icon icon-svg mb-10"><img src="{{ asset('public/frontend/style/images/icons/ec-mobile.png')}}" alt=""></div>
                  <h4 class="panel-title mb-35">Basic Plan</h4>
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->basic_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->basic_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>1</strong> Project </td>
                    </tr>
                    <tr>
                      <td><strong>100K</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>100MB</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
            <div class="col-md-4 popular">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="icon icon-svg mb-10"><img src="{{ asset('public/frontend/style/images/icons/ec-online-shop.png')}}" alt=""></div>
                  <h4 class="panel-title mb-35">Premium Plan</h4>
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->premium_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->premium_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>5</strong> Projects </td>
                    </tr>
                    <tr>
                      <td><strong>100K</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>200MB</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
            <div class="col-md-4">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="icon icon-svg mb-10"><img src="{{ asset('public/frontend/style/images/icons/ec-store.png')}}" alt=""></div>
                  <h4 class="panel-title mb-35">Corporate Plan</h4>
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->corporate_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->corporate_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>20</strong> Projects </td>
                    </tr>
                    <tr>
                      <td><strong>300K</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>500MB</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.pricing-wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
      <div class="container inner">
        <h2 class="section-title mb-40 text-center">Pricing Table in Box</h2>
        <div class="pricing-wrapper">
          <div class="pricing-switcher-wrapper switcher">
            <div class="pricing-switchers">
              <div class="pricing-switcher pricing-switcher-active">Monthly</div>
              <div class="pricing-switcher">Yearly</div>
              <div class="switcher-button bg-default"></div>
            </div>
          </div>
          <div class="space40"></div>
          <div class="row no-gutters">
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->basic_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->basic_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                  <h4 class="panel-title mb-0">Basic Plan</h4>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>1</strong> Project </td>
                    </tr>
                    <tr>
                      <td><strong>100K</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>100MB</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->premium_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->premium_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                  <h4 class="panel-title mb-0">Premium Plan</h4>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>5</strong> Projects </td>
                    </tr>
                    <tr>
                      <td><strong>100K</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>200MB</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
            <div class="space30 d-none d-md-block d-lg-block d-xl-none"></div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->corporate_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->corporate_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                  <h4 class="panel-title mb-0">Corporate Plan</h4>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>20</strong> Projects </td>
                    </tr>
                    <tr>
                      <td><strong>300K</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>500MB</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="pricing panel box bg-white shadow">
                <div class="panel-heading">
                  <div class="prices color-dark">
                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ $price->community_month }}</span> <span class="price-duration">month</span></div>
                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ $price->community_year }}</span> <span class="price-duration">year</span></div>
                  </div>
                  <h4 class="panel-title mb-0">Community Plan</h4>
                </div>
                <!--/.panel-heading -->
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td><strong>Unlimited</strong> Projects </td>
                    </tr>
                    <tr>
                      <td><strong>Unlimited</strong> API Access </td>
                    </tr>
                    <tr>
                      <td><strong>Unlimited</strong> Storage </td>
                    </tr>
                    <tr>
                      <td> Custom <strong>Cloud</strong> Services </td>
                    </tr>
                    <tr>
                      <td> Weekly <strong>Reports</strong></td>
                    </tr>
                    <tr>
                      <td> 7/24 <strong>Support</strong></td>
                    </tr>
                  </table>
                </div>
                <!--/.panel-body -->
                <div class="panel-footer"> <a href="#" class="btn" role="button">Choose Plan</a></div>
              </div>
              <!--/.pricing -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.pricing-wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
@endsection