<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <a href="{{ route('index') }}">トップページ</a>
    </h1>
    <form action="/trainings/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <select name="training[part_id]">
              @foreach ($parts as $part)
                <option value="{{ $part->id }}">{{ $part->name }}</option>
              @endforeach
            </select>
        </div>
        <div>
            <label for="training[name]">トレーニング名</label>
            <input type="text" name="training[name]">
        </div>
        <div>
            <label for="training[body]">説明</label>
            <textarea name="training[body]"></textarea>
        </div>
        <div class="image">
            <input type="file" name="image">
        </div>
        <div>
            <label for="training[movie_code]">動画</label>
            <input type="text" name="training[movie_code]">
        </div>
        <button type="submit">保存</button>
    </form>
</body>
</html>