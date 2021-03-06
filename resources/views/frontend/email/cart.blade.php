<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mail</title>
</head>
<body>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#dcf0f8" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
  <tbody>
    <tr>
      <td align="center" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><table border="0" cellpadding="0" cellspacing="0" width="600" style="margin-top:15px">
          <tbody>
            <tr style="background:#fff">
              <td align="left" width="600" height="auto" style="padding:15px"><table>
                  <tbody>
                    <tr>
                      <td>
                      
                      <h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0"> Cảm ơn
                          quý khách {{$customer->full_name}}
                          đã đặt hàng tại <strong>DN</strong>,</h1>
                     
                        <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"> <strong>DN</strong> rất vui thông báo đơn hàng #{{ $order_id }} của quý khách đã
                          được tiếp nhận và đang trong quá trình xử lý. <strong>DN</strong> sẽ thông báo đến quý khách
                          ngay khi hàng chuẩn bị được giao. </p>
                        <h3 style="font-size:13px;font-weight:bold;color:#ec1c24;text-transform:uppercase;margin:20px 0 0 0;border-bottom:1px solid #ddd"> Thông tin đơn hàng #{{ $order_id }} <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày {{date('d')}} Tháng {{date('m')}} Năm {{date('Y')}} {{date('H:i:s')}})</span> </h3></td>
                    </tr>
                    <tr>
                      <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px"><table cellspacing="0" cellpadding="0" border="0" width="100%">
                          <thead>
                            <tr>
                              <th align="left" width="50%" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold"> Thông tin thanh toán </th>
                              <th align="left" width="50%" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold"> Địa chỉ giao hàng </th>
                            </tr>
                          </thead>
                          <tbody>
                          
                            <tr>
                              <td valign="top" style="padding:3px 9px 9px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><span style="text-transform:capitalize">{{$customer->full_name}}</span><br>
                                <a href="mailto:{{$customer->email}}" target="_blank">{{$customer->email}}</a><br>
                                {{$customer->phone}} </td>
                              <td valign="top" style="padding:3px 9px 9px 9px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><span style="text-transform:capitalize">{{$customer->full_name}}</span><br>
                                <a href="mailto:{{ $customer->email }}" target="_blank">{{ $customer->email }}</a><br>
                                @if($customer->country_id == 235)
                                @if( isset( $customer->tinh->name ))
                                  {{ $customer->tinh->name }},
                                @endif
                                @if( isset( $customer->huyen->name ) )
                                  {{ $customer->huyen->name }},
                                @endif
                                @if( isset($customer->xa->name ))
                                  {{ $customer->xa->name }},
                                @endif
                                @else
                                  @if( isset($customer->country->name ))
                                    {{ $customer->country->name }},
                                  @endif
                                @endif                             

                                {{ $customer->address }} <br>
                                {{ $customer->phone }}<br>
                            </tr>
                            
                            <tr>
                             <td valign="top" style="padding:7px 9px 0px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444" colspan="2"><p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"> <strong>Phương thức thanh toán: </strong> 
                            <?php if($method_id == 2) {
                              echo "Chuyển khoản ngân hàng";

                            }elseif( $method_id == 3){
                              echo "INTERNET BANKING / VISA / MASTER CARD";
                            }
                            echo " - ";
                              if(isset($da_thanh_toan) && $da_thanh_toan == 1){
                                echo " ĐÃ THANH TOÁN";
                              }else{
                                echo " CHƯA THANH TOÁN";
                              }
                              ?>

                               <br>
                                  <strong>Thời gian giao hàng dự kiến:</strong> {{ $arrDate[0] }} <br>                                  
                                  
                                </p></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>                   
                    <tr>
                      <td><h2 style="text-align:left;margin:10px 0;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#ec1c24"> CHI TIẾT ĐƠN HÀNG</h2>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%" style="background:#f5f5f5">
                          <thead>
                            <tr>
                              <th align="left" bgcolor="#ec1c24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Sản phẩm</th>
                              <th align="left" bgcolor="#ec1c24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px"> Đơn giá</th>
                              <th align="left" bgcolor="#ec1c24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Số lượng</th>
                             
                              <th align="right" bgcolor="#ec1c24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm</th>
                            </tr>
                          </thead>
                          <tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                              <?php $total = 0 ?>
                              @foreach($arrProductInfo as $product)
                                <?php
                                  $price = $product->is_sale ? $product->price_sale : $product->price_vnd;
                                ?>
                              <tr>
                              <td align="left" valign="top" style="padding:3px 9px"><span>{{
                                $product->name_vi
                                }}</span><br>
                              <td align="left" valign="top" style="padding:3px 9px"><span>{{ number_format($price) }}</span></td>
                              <td align="left" valign="top" style="padding:3px 9px">{{ $getlistProduct[$product->id] }}</td>                              
                              <td align="right" valign="top" style="padding:3px 9px"><span>{{ number_format($price * $getlistProduct[$product->id]) }}</span></td>
                              <?php $total += $price * $getlistProduct[$product->id] ?>
                               </tr>
                              @endforeach
                          </tbody>
                          <tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">                                                       
                            <tr bgcolor="#eee">
                              <td colspan="3" align="right" style="padding:7px 9px"><strong><big>Tổng giá trị đơn hàng</big></strong></td>
                              <td align="right" style="padding:7px 9px"><strong><big><span>{{ number_format($total) }}</span></big></strong></td>
                            </tr>
                          </tfoot>
                        </table>                        
                    </tr>                    
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>    
  </tbody>
</table>

</body>
</html>