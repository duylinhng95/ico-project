@extends('user.layout', ['user' , $user])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Referral</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Your referral link
                    </div>
                    <div class="panel-body">
                        <p>Use this link to invite your friend and earn 6% on the amount they invest</p>
                        <div class="row">
                            <div class="col-md-4">
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
        <dvi class="row">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        Your referred users list
                    </div>
                    <div class="panel-body">
                        @if(count($referral) > 0)
                        <p>Congratulations!!! You have introduced {{count($referral)}} users</p>
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Email</th>
                                    <th>Registered</th>
                                </tr>
                            </thead>
                            @foreach ($referral as $k => $ref)
                            <tbody>
                                <tr>
                                    <td>{{$k +1}}</td>
                                    <td>{{$ref->email}}</td>
                                    @if (date('m') - $ref->created_at->format('m') > 0)
                                    <td>{{date('m') - $ref->created_at->format('m')}} months ago</td>
                                    @else
                                    <td>New User</td>
                                    @endif                                    
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @else
                        <p>You haven't introduced to any user. Let get your bonus by copy referral link above to your friends</p>
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Email</th>
                                    <th>Registered</th>
                                </tr>
                            </thead>                        
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <p class="text-center">No user referral yet!!!</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
        </dvi>
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