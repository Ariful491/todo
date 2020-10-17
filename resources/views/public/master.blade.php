<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/public/public')}}/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/public')}}/css/bootstrap.min.css">
    @yield('title')
</head>
<body>
@yield('body')


<script type="text/javascript" src="{{asset('/public/public')}}/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="{{asset('/public/public')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('/public/public')}}/js/main.js"></script>
<script>
$('body').on('keyup','#search',function(){
 var searchQuery = $(this).val();
   $.ajax({
      method:"POST",
      url:"{{ route('search') }}",
      dataType: 'json',
       data: {
          '_token':"{{ csrf_token() }}",
           searchQuery : searchQuery,
          },
       success: function (number) {
           // console.log(number);
           // console.log(number_found);
           // console.log(number_all);
           var tableRow="";
           var all_number="";
           var digits="";
           $('#dynamic_number').html('');
           $('#all_number').html('');

           $.each(number.number, function (index, value) {
               tableRow = '<h6>'+value.first_name+' '+value.last_name+'</h6>'+'<p>'+value.phone_number+'</p>';

               $('#dynamic_number').append(tableRow);


           });
           $.each(number.number_all, function (index, value) {
               all_number = '<h5>'+value.first_name+' '+value.last_name+'</h5>'+'<h6>'+value.phone_number+'</h6>';
               $('#all_number').append(all_number);

              console.log(all_number);

           });
           console.log("new");
          var number = number.number_found;


           var found_totals = number;

           $('#found_total').empty();
           $('#found_total').append(found_totals);




       }
   })
});
</script>

<script>


    $('body').on('keyup','#search',function(){
        var DynamicNumber = $('#dynamic_number').html('');
        var all_number = $('#all_number').html('');
        var searchQuery = $(this).val();

        if(searchQuery){
            DynamicNumber.show();
            $('#found_total').show();
        }
        else {
            DynamicNumber.hide();
            $('#found_total').hide();
            $('#all_number').hide();
        }
        $('#see_all').click(function () {
            all_number.show();
        })

    });


    // var DynamicNumber = $('#dynamic_number').html('');
    // var Search = $('#search').val();
    // console.log(Search);
    // if (Search == ' '){
    //     DynamicNumber.hide();
    // }

</script>
</body>
</html>

