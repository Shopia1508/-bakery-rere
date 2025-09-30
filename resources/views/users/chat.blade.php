<!DOCTYPE html>
<html>
<head>
    <title>Chat Sederhana</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Chat</h2>
    <div id="chatBox" style="border:1px solid #ccc; height:200px; overflow-y:scroll; padding:10px;"></div>

    <form id="chatForm">
        <input type="hidden" name="order_id" value="1">
        <input type="hidden" name="sender" value="customer">
        <input type="text" name="message" placeholder="Tulis pesan..." required>
        <button type="submit">Kirim</button>
    </form>

    <script>
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        // Kirim pesan
        $('#chatForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: '/messages',
                type: 'POST',
                data: $(this).serialize(),
                success: function(){
                    loadMessages();
                    $('#chatForm')[0].reset();
                }
            });
        });

        // Ambil pesan
        function loadMessages(){
            $.get('/messages?order_id=1', function(data){
                let html = '';
                data.forEach(msg => {
                    html += '<p><b>' + msg.sender + ':</b> ' + msg.message + '</p>';
                });
                $('#chatBox').html(html);
                $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);
            });
        }

        // Auto refresh tiap 3 detik
        setInterval(loadMessages, 3000);
        loadMessages();
    </script>
</body>
</html>
