@extends('layout')

@section('title')
    Столи
@endsection

@section('header')
    <div>
        Список столиків
    </div>
    <a href="/addTable" style="position: absolute; top: 0px; right: 220px;">Додати столик</a>
@endsection

@section('content')
    <?php
    use Illuminate\Support\Facades\Http;

    try {
        if(DB::connection()->getPdo())
        {
            $tables = DB::select('SELECT * FROM tables WHERE organization_id = 439');
        }
    }
    catch (Exception $e) { ?>
    <div class="card border-danger m-3 text-white bg-danger">
        <div class="card-header">
            Неможливо підключитись до БД
        </div>
        <div class="card-body">
            <p class="card-text">Виникла помилка при підключенні до бази даних OnlineOrd Admin.</p>
        </div>
    </div>
    <?php
    }
    ?>
    <table class="table table-striped table-hover table-bordered mb-0">
        <thead class="table-secondary">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Номер</th>
            <th scope="col">Статус</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tables as $table):

        $response = Http::asForm()->post('http://127.0.0.1:5000/qrcode', [
            'organization_id' => 439,
            'table_id' => $table->ID,
            'on_table' => true,
        ]);

        $data = $response->getBody()->getContents();
        $base64 = 'data:image/png;base64,' . base64_encode($data);
        ?>
        <script>
            console.log('<?=$base64?>');
        </script>

        <tr>
            <th scope="row"><?=$table->ID?></th>
            <td><?=$table->tableNo?></td>
            <td><?=$table->tableStatus?></td>
            <td style="width:520px;">
                <div class="food-actions-btn-group">
                    <div class="btn-group" role="group" aria-label="actions">
                        <a href="#" class="btn btn-sm btn-main" data-bs-toggle="modal" data-bs-target="#modal{{$table->ID}}"><i class="fal fa-qrcode"></i> Переглянути QR</a>
                        <a download="qr<?=$table->ID?>_table<?=$table->tableNo?>" href="<?=$base64?>" class="btn btn-sm btn-success"><i class="fal fa-arrow-to-bottom"></i> Завантажити QR</a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fal fa-trash"></i> Видалити</a>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Modal -->
        <div class="modal fade" id="modal{{$table->ID}}" tabindex="-1" aria-labelledby="modal{{$table->ID}}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal{{$table->ID}}Label">QR код для столику <?=$table->ID?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="<?=$base64?>" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fal fa-times"></i> Відмінити</button>
                        <a download="qr<?=$table->ID?>_table<?=$table->tableNo?>" href="<?=$base64?>" class="btn btn-success"><i class="fal fa-arrow-to-bottom"></i> Завантажити</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        </tbody>
    </table>


@endsection
