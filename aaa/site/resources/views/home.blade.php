@extends('layout')

@section('title')Продукты@endsection

@section('main_content')
    <style>
        .tables{
            height: 30px;
            font-size: 14px;
            margin-top: 20px
        }

        .company{
            color: #1d2124;
        }

    </style>

    <table style="width: 100%; margin-top: 50px" id="customers_table" class="tables dataTable no-footer">
        <thead>
        <tr style=" background: #ffc912; height: 50px">
            <td><b>ID</b></td>
            <td><b>Имя</b></td>
            <td><b>Фамилия</b></td>
            <td><b>Почта</b></td>
            <td><b>Номер телефона</b></td>
            <td><b>Адрес</b></td>
            <td><b>Дата создания записи</b></td>

        </tr>
        </thead>
        <tbody>
        <? $num = 1; ?>
        @foreach ($users as $user)

            <tr class="td-height tables" style="border-bottom: solid #b6b6b6 1px;" id="in_company" data-id="<?= $user->id ?>">
                <td id="id"><?= $user->id ?></td>
                <td id="name"><b><?= $user->name ?></b></td>
                <td id="surname"><?= $user->surname ?></td>
                <td id="email"><b><?= $user->email ?></b></td>
                <td id="phone_number"><?= $user->phone_number ?></td>
                <td id="address"><b><?= $user->address ?></b></td>
                <td id="creat_at"><b><?= $user->creat_at ?></b></td>
            </tr>
            <? $num++ ?>
        @endforeach
        </tbody>
    </table>


    <script>

        $('#archive').on('click', function () {
            var archiveId = $(this).data('id');
            $.ajax({
                url: '/main/delete_company/id/' + archiveId,
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    if (data.status === 'OK') {

                        $('#in_archive<?= $user->id ?>').remove();
                    } else {
                        alert("Error");
                    }
                }
            });
        });

    </script>

@endsection


