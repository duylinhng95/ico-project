@extends('user.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Referral</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        You referral link
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