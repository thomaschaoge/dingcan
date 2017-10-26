<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>饿了么收银台</title>
        <link href="{{asset('css/app.96caca.css')}}" rel="stylesheet">
        <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    </head>
    <body>
        <header id="header"><i class="eleme-icon logo"><h1 class="title">收银台</h1></i>
        </header>
        <main id="main">
            <main data-reactid=".0">
                <section class="container order" data-reactid=".0.0">
                    <h3 class="text-muted" data-reactid=".0.0.0">订单详情</h3>
                    <div class="order-detail clearfix" data-reactid=".0.0.1">
                        <div class="pull-left" data-reactid=".0.0.1.0">
                            <p class="text-muted" data-reactid=".0.0.1.0.0">{{ $order['shop_name'] }}外卖订单</p>
                            <p class="" data-reactid=".0.0.1.0.1">
                                <span class="text-muted text-ellipsis order-desc" data-reactid=".0.0.1.0.1.0">{{ $address['name']." " }} {{["","先生","女士"][$address['sex']]." "}} {{$address['phone']."\n"}}
{{ $address['address'].$address['address_details']."\n" }}
-
@foreach($orderDetails as $v)
    $v['title']."  x".$v['num']."\n"
@endforeach
                                </span>
                                <a class="text-primary show-detail text-link" data-reactid=".0.0.1.0.1.1"><span data-reactid=".0.0.1.0.1.1.0">查看详情</span><span class="triangle triangle-down" data-reactid=".0.0.1.0.1.1.1"></span>
                                </a>
                            </p>
                            <div class="hidden order-detail text-muted" data-reactid=".0.0.1.0.2">
                                <p data-reactid=".0.0.1.0.2.0">{{ $address['name']." " }} {{["","先生","女士"][$address['sex']]." "}} {{$address['phone']."\n"}}
{{ $address['address'].$address['address_details']."\n" }}
-
@foreach($orderDetails as $v)
    $v['title']."  x".$v['num']."\n"
@endforeach
                                </p>
                                <a class="text-link" data-reactid=".0.0.1.0.2.1"><span data-reactid=".0.0.1.0.2.1.0">收起详情</span><span class="triangle triangle-up" data-reactid=".0.0.1.0.2.1.1"></span>
                                </a>
                            </div>
                        </div>
                        <p class="pull-right" data-reactid=".0.0.1.1">
                            <span data-reactid=".0.0.1.1.0">
                                <span data-reactid=".0.0.1.1.0.0">支付金额：</span>
                                <strong class="text-lg text-highlight" data-reactid=".0.0.1.1.0.1">
                                    <span data-reactid=".0.0.1.1.0.1.0">¥</span><span data-reactid=".0.0.1.1.0.1.1">{{ $order['amount'] }}</span>
                                </strong>
                            </span>
                        </p>
                    </div>
                </section>
                <section class="container paymethods" data-reactid=".0.1">
                    <header data-reactid=".0.1.0">
                        <h3 data-reactid=".0.1.0.0">请选择支付方式</h3>
                        <p class="text-muted" data-reactid=".0.1.0.1">
                            <span data-reactid=".0.1.0.1.0">剩余支付时间</span>
                            <span class="text-highlight" data-reactid=".0.1.0.1.1">14分40秒</span>
                            <span data-reactid=".0.1.0.1.2">，逾期订单将自动取消</span>
                        </p>
                    </header>
                    <section class="native-payment-list clearfix hidden" data-reactid=".0.1.1">
                        <p class="title text-muted" data-reactid=".0.1.1.0">
                            <span data-reactid=".0.1.1.0.0">饿了么钱包支付</span>
                            <span class="text-highlight text-money" data-reactid=".0.1.1.0.1"></span>
                        </p>
                        <div class="pull-left" data-reactid=".0.1.1.1">
                            <p class="text-error" data-reactid=".0.1.1.1.1"></p>
                        </div>
                        <p class="pull-left show-third text-primary" data-reactid=".0.1.1.2">
                            <span class="show-third-payment hidden" data-reactid=".0.1.1.2.0">
                                <span data-reactid=".0.1.1.2.0.0">查看其他支付方式</span>
                                <span class="iconfont icon-arrow" data-reactid=".0.1.1.2.0.1"></span>
                            </span>
                        </p>
                    </section>
                    <section class="third-payment" data-reactid=".0.1.2">
                        <div data-reactid=".0.1.2.0">
                            <p class="title text-muted" data-reactid=".0.1.2.0.0">
                                <span data-reactid=".0.1.2.0.0.0">第三方支付 </span>
                                <span class="text-highlight text-money" data-reactid=".0.1.2.0.0.1"> ￥{{ $order['amount'] }}</span>
                            </p>
                            <ul class="third-payment-list clearfix" data-reactid=".0.1.2.0.1">
                                <li class="alipay active" data-reactid=".0.1.2.0.1.$0">
                                    <div class="payment-lsit-item-content" data-reactid=".0.1.2.0.1.$0.0">
                                        <h4 data-reactid=".0.1.2.0.1.$0.0.0">支付宝</h4>
                                        <small class="text-muted" data-reactid=".0.1.2.0.1.$0.0.2"></small>
                                    </div>
                                </li>
                                <li  class="weixin" data-reactid=".0.1.2.0.1.$1">
                                    <div class="payment-lsit-item-content" data-reactid=".0.1.2.0.1.$1.0">
                                        <h4 data-reactid=".0.1.2.0.1.$1.0.0">微信支付</h4>
                                        <small class="text-muted" data-reactid=".0.1.2.0.1.$1.0.2"></small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <footer class="paypassword" data-reactid=".0.1.3">
                        <form class="hide" name="password" data-reactid=".0.1.3.1">
                            <div class="title" data-reactid=".0.1.3.1.0">
                                <p data-reactid=".0.1.3.1.0.0">
                                    <span data-reactid=".0.1.3.1.0.0.0">为保障您的钱包资金安全, 请输入</span>
                                    <strong data-reactid=".0.1.3.1.0.0.1">支付密码</strong>
                                </p>
                            </div>
                            <section class="form-group" data-reactid=".0.1.3.1.1">
                                <input placeholder="请输入6位支付密码" class="" type="password" value="" data-reactid=".0.1.3.1.1.0">
                                <span class="text-muted" data-reactid=".0.1.3.1.1.1">如您忘记密码, 请前往商家版手机端修改</span>
                                <a class="text-primary text-link" data-reactid=".0.1.3.1.1.2">忘记密码?</a>
                            </section>
                            <p class="hidden" data-reactid=".0.1.3.1.2">
                            </p>
                        </form>
                        <section class="messagebox-backdrop" style="display:none;" data-reactid=".0.1.3.2">
                            <div class="messagebox " data-reactid=".0.1.3.2.0"></div>
                        </section>
                        <section class="modal-backdrop" style="display:none;" data-reactid=".0.1.3.3">
                            <div class="modal" data-reactid=".0.1.3.3.0">
                                <section class="timeout clearfix" data-reactid=".0.1.3.3.0.0">
                                    <header class="clearfix" data-reactid=".0.1.3.3.0.0.0">
                                        <span class="icon-close pull-right text-muted" data-reactid=".0.1.3.3.0.0.0.0">x</span>
                                    </header>
                                    <i class="eleme-icon icon-error pull-left" data-reactid=".0.1.3.3.0.0.1"></i>
                                    <div class="pull-left clearfix" data-reactid=".0.1.3.3.0.0.2">
                                        <strong data-reactid=".0.1.3.3.0.0.2.0"></strong>
                                        <p class="text-muted" data-reactid=".0.1.3.3.0.0.2.1"></p>
                                        <footer data-reactid=".0.1.3.3.0.0.2.2">
                                            <button class="btn btn-lg btn-primary" data-reactid=".0.1.3.3.0.0.2.2.0"></button>
                                            <button style="display:none;" class="btn btn-default btn-lg" data-reactid=".0.1.3.3.0.0.2.2.1"></button>
                                        </footer>
                                    </div>
                                </section>
                            </div>
                        </section>
                        <button onclick="doPay(this)" shopid="{{ $order['shopid'] }}" orderid="{{ $order['id'] }}" type="button" class="btn btn-success btn-lg" data-reactid=".0.1.3.4">确认支付</button>
                    </footer>
                </section>
                <section class="messagebox-backdrop" style="display:none;" data-reactid=".0.2">
                    <div class="messagebox " data-reactid=".0.2.0"></div>
                </section>
            </main>
        </main>
        <script>
         function doPay(e) {
             $.ajax({
                 url:"/pay/" + $(e).attr("shopid") + "/" + $(e).attr("orderid"),
                 type:"POST",
                 datatype:'json',
                 headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                 success:function (data) {
                     alert('支付成功');
                     window.location.href="/personal/order";
                 },
                 error:function () {
                     alert('支付失败');
                     //window.location.href="/pay/" + $(e).attr("shopid") + "/" + $(e).attr("orderid");
                 }
             });
         }
        </script>
    </body>
</html>
