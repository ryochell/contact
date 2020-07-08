<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    @extends('layouts.app')
    @section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">お問い合わせ</div>
                    <div class="panel-body">
                        <h1>お問い合わせありがとうございました。</h1>
                        <div>お問い合わせを受け付けました。</div>

                        <div>折り返し、担当者よりご連絡いたしますので、</div>
                        <div>恐れ入りますが、しばらくお待ちください。</div>

                        <div>なお、ご入力いただいたメールアドレス宛に受付完了メールを配信しております。</div>
                        <div>完了メールが届かない場合、処理が正常に行われていない可能性があります。</div>
                        <div>大変お手数ですが、再度お問い合わせの手続きをお願い致します。</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>
