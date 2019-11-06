<body>
  <p>{{ $request->content }}</p>
  <br/>
  <p>IP: {{ $request->ip() }}</p>
</body>