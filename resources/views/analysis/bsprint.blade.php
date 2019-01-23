<!DOCTYPE html>
<html>
  <head>
    @include('layout.head')
  </head>

  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
     <section class="invoice">
       <!-- title row -->
       <div class="row">
         <div class="col-xs-12">
           <h2 class="page-header">
             <i class="fa fa-globe"></i>
             @if (Auth::user()->shopname != NULL)
               {{Auth::user()->shopname}}
             @else
             Panda Trade
             @endif
             <small class="pull-right">{{Date('l-d-M-Y')}}</small>
           </h2>
         </div>
         <!-- /.col -->
       </div>
       <!-- info row -->
       <div class="row invoice-info">
         <div class="col-sm-6 invoice-col">
           <address>
             <strong>{{Auth::user()->shopname}}.</strong><br>
             {{Auth::user()->business_location}}<br>
             {{Auth::user()->address}}<br>
           </address>
         </div>
         <div class="col-sm-6 invoice-col">
           <address>
             <b>Business contact:</b> {{Auth::user()->business_contact}}<br>
             <b>Email:</b>{{Auth::user()->email}} 
           </address>
         </div>
       </div>
         <!-- /.col -->
        <div class="row">
         <div class="col-sm-8 col-sm-offset-2 invoice-col">
           <h3>Balance Sheet for: &nbsp;<small><b>{{Carbon\carbon::parse($resultfrom)->format('d-M-Y')}}&nbsp;</b> </small> to   <small><b>&nbsp;{{Carbon\carbon::parse($resultto)->format('d-M-Y')}}</b></small></h3>
           <div class="table-responsive">
             <table class="table">
               <tr>
                 <th>Total Income:</th>
                 <td>{{number_format($incometotal)}}frs</td>
               </tr>
               <tr>
                 <th>Total Expenditure</th>
                 <td>{{number_format($expensetotal)}}frs</td>
               </tr>
               <tr>
                 <th>Balance:</th>
                 <td>
                   @php
                     {{$balance = $incometotal - $expensetotal;}}
                   @endphp
                   {{number_format($balance)}}frs
                 </td>
               </tr>
               <tr>
                 <th>%saved:</th>
                 <td>
                   @php
                     {{
                       if ($incometotal>0) 
                       {
                         $savings=($balance/$incometotal) * 100;
                       } 
                       else($savings = 0);
                     }}
                   @endphp
                   {{$savings}}%
                 </td>
               </tr>
             </table>
           </div>
         </div>
         <!-- /.col -->
        </div>

       <!-- Table row -->
       <div class="row">
         <div class="col-xs-12 table-responsive">
           <table class="table table-striped">
             <thead>
             <tr>
               <th>index</th>
               <th>Date</th>
               <th>Income</th>
               <th>Expenditure</th>
               <th>Balance</th>
             </tr>
             </thead>
             <tbody>
               @foreach ($balancesheet as $element)
                 <tr>
                   <td></td>
                   <td>{{Carbon\carbon::parse($element->date)->format('d-M-Y')}}</td>
                   <td>{{number_format($element->income)}}frs</td>
                   <td>{{number_format($element->expenditure)}}frs</td>
                   <td>
                     @php
                       {{ $balance = ($element->income) - ($element->expenditure); }}
                     @endphp
                     {{number_format($balance)}}frs
                   </td>
                 </tr>
               @endforeach
             </tbody>
           </table>
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </section>
    </div>
    <!-- ./wrapper -->
  </body>
</html>
