<html>

     <body>

        <div class="col-md-6">


           <h1>Choose a place to pick, destination and date </h1>


                <br>


                <form action="/order_result" method="POST">
                    @csrf


                        Choose a place to pick
                        <div class="form-group">

                            <select name="pick_id">


                                @foreach ($places as $place)
                                    <option value="{{$place->id}}">{{$place->place_name}}</option>
                                @endforeach


                            </select>

                        </div>


                        <br>


                        Choose a destination
                        <div class="form-group">

                            <select name="dest_id">


                                @foreach ($places as $destination)
                                    <option value="{{$destination->id}}">{{$destination->place_name}}</option>
                                @endforeach





                            </select>

                        </div>



                        <br>



                        Choose date
                        <div class="form-group">

                            <input type="date" id="taxi_date" name="taxi_date">

                        </div>

                        <br>
                        {{--  <a href="{{route('order_result')}}" class="btn btn-primary btn-lg disabled" role="button" >See Result</a>  --}}

                        <input type="submit" value="Send" class="btn btn-success">



                </form>
                </div>




        </div>


    </body>


</html>














{{--
{{--  <div class="col-md-6">

    <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
    <div class="contact_bg">
    <div class="input_main">
    <div class="container">
        <a href="{{route('taxi_order')}}"><h2 class="request_text">Go to taxi order page</h2></a>
        <form action="/action_page.php">
        <div class="form-group">
        <input type="text" class="email-bt" placeholder="PICKUP" name="Name">
        </div>
        <div class="form-group">
        <input type="text" class="email-bt" placeholder="DROP" name="Email">
        </div>
        <div class="form-group">
        <input type="text" class="email-bt" placeholder="WHEN" name="Email">
        </div>
        </form>
        </div>
        </div>
        <div class="send_bt"><a href="#">SEARCH</a></div>
    </div>

</div>  --}}
