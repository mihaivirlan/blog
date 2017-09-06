<script
        src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        getItems();

        //Submit event
        $('#itemForm').on('submit', function(e){
            e.preventDefault();

            let text = $('#text').val();
            let body = $('#body').val();

            addItem(text, body);
        });

        //Delete event
        $('body').on('click', '.deleteLink',function(e){
            e.preventDefault();

            let id = $(this).data('id');
            deleteItem(id);
        });

        //Delete item through api
        function deleteItem(id){
            $.ajax({
                method:'DELETE',
                url:'http://localhost/api/items/'+id,
                data: {method: 'DELETE'}
            }).done(function(item){
                alert('Item Removed');
                location.reload();
            });
        }

        //Insert items using api
        function addItem(text, body){
            $.ajax({
                method:'POST',
                url:'http://localhost/api/items',
                data: {text: text, body: body}
            }).done(function(item){
                alert('Item #'+item.id+' added');
                location.reload();
            });
        }

        //Get items from api
        function getItems() {
            $.ajax({
                url:'http://localhost/api/items/'
            }).done(function(items){
                let output = '';
                $.each(items, function(key, item){
                    output += `
                    <li class="list-group-item">
                        <strong>${item.text}:</strong>${item.body} <a href="#" class="deleteLink" data-id="${item.id}">Delete</a>
                    </li>
                    `;
                });
                $('#items').append(output);
            });
        }
    });
</script>
