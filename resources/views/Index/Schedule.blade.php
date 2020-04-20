

        

            <div class="container">

               
                <h1 class="title">Conference Schedule</h1>

                <p style="text-align: center"></p>

                <div class="row">

                    <div class="col-xl-10 offset-xl-1">

                        <div class="scheduleTab">
                            <div class="tab-content">
                                @foreach($scheduleData as $scheduledata)
                                <div id="day1" class="tab-pane active">
                                    <h4>{{$scheduledata->Day}}</h4>
                                    <div class="schedule-card">

                                        <div class="row no-gutters">

                                            <div class="col-md-3">

                                                <div class="card-identity">

                                                    <h3>{{$scheduledata->EventStartTime}}</h3>

                                                    <p></p>

                                                </div>

                                            </div>

                                            <div class="col-md-9 align-self-center">

                                                <div class="schedule-content">

                                                    <p class="schedule-date"></p>

                                                    <h3>{{$scheduledata->description}}</h3>

                                                    <p></p>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                @endforeach
                            </div>

                        </div>

                    </div>

                </div>

            </div>

