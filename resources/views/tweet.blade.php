<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>model sample</title>
</head>
<body>
  <ul>
    @foreach($items as $item)
      <li>{{$item->tweet_contentl}}</li>
    @endforeach
  </ul>
</body>
</html>
