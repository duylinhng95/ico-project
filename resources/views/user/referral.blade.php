@extends('user.layout', ['user' => $user, 'brand' => $brand, 'brandName' => $brandName])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1 class="page-header">Referral</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Get YT tokens as a bonus = 6% of the purchase amount!</h4>
                    </div>
                    <div class="panel-body">                        
                        <div class="row">
                             <p>The referral program rules are easy:<br>
                                1. You now have your referral unique link below.<br>
                                2. Invite new users to our ICO project using your unique referral link.<br>
                                3. The account balances of all new users who register using your <br>referral link will be linked to your personal account. We will update your referrals’ balances once they make any investment.
                                4. Moreover, you can also initially earn 500 YT tokens for every referrals.<br>
                                5. For every purchase made by users you have invited - you will receive 6% of the purchase amount in YT tokens to your MEW wallet saved in Token Sales.<br>
                                6. Referrals Bonus can only be withdrawn when ICO ends.
                            </p>   
                        </div>                        
                        <div class="row">
                            <div class="col-md-6 col-md-offset-1">
                                <input class="form-control" id="referralLink" type="text" readonly value="{{url('/referral').'/?referral='.$user->referal_token}}">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-default" onclick="copyLink()" id="btnCopy">Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @if(count($referral) > 0)
        <div class="row">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        Your referred users list
                    </div>
                    <div class="panel-body">                        
                        <p>Congratulations!!! You have introduced {{count($referral)}} users</p>
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>KYC Status</th>
                                    <th>My Bonus</th>
                                    <th>Join Date</th>
                                </tr>
                            </thead>
                            @foreach ($referral as $k => $ref)
                            <tbody>
                                <tr>
                                    <td>{{$k +1}}</td>
                                    <td>{{substr($ref->email,0,6)}}...</td>
                                    <td>{{$ref->is_kyc ? "Verified": "Not Verified"}}</td>
                                    <td>Updating</td>
                                    <td>{{$ref->created_at->format('m/d/Y')}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
        </div>
        @endif
        <!-- /.row -->
    </div>
    <script type="text/javascript">
        function copyLink(){
            var copyText = document.getElementById("referralLink");
              copyText.select();
              console.log(copyText);
              document.execCommand("copy");
              $('#btnCopy').html('Copied!!');
              $('#btnCopy').attr('disabled','disabled');
              $('#btnCopy').css('border-color', '#333');
        }
    </script>
@endsection