@extends('front_end.layout.main')
@section('content')
<!-- Leagues Content Section Start -->
<section class="scoccer">
    <div class="container">
        <div class="scoccer-inner">
            <div class="back-btn">
                <a href="premier-league-players">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2>2023-24 Season </h2>

            <div class="team-view-sec">
                <div class="team-view-header">
                    <h4>Vyberte si svého kapitána a zástupce kapitána</h4>
                    <ul>
                        <li>
                            <span class="c-logo"> C </span>
                            <div class="c-details">
                                <h6>Kapitán dostane</h6>
                                <p>2X (dvojité body)</p>
                            </div>
                        </li>
                        <li>
                            <span class="c-logo"> VC </span>
                            <div class="c-details">
                                <h6>Zástupce kapitána dostane</h6>
                                <p>1,5X (dvojité body)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="scoccer-inner-content">
                <div class="team-view-table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Hráč</th>
                                <th scope="col">Body</th>
                                <th scope="col">% C PAR</th>
                                <th scope="col">% VC PAR</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="player-dp">
                                    <div class="player-dp-inner player-dp-inner1"></div>
                                </td>
                                <td>
                                    <h6>Blaise Rogeau</h6>
                                    <span>41 Pt</span>
                                </td>
                                <td>
                                    <span class="c-logo">C</span>
                                    <p>0.55%</p>
                                </td>
                                <td>
                                    <span class="c-logo">VC</span>
                                    <p>0.37%</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="player-dp">
                                    <div class="player-dp-inner player-dp-inner2"></div>
                                </td>
                                <td>
                                    <h6>Blaise Rogeau</h6>
                                    <span>41 Pt</span>
                                </td>
                                <td>
                                    <span class="c-logo">C</span>
                                    <p>0.55%</p>
                                </td>
                                <td>
                                    <span class="c-logo">VC</span>
                                    <p>0.37%</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="player-dp">
                                    <div class="player-dp-inner player-dp-inner3"></div>
                                </td>
                                <td>
                                    <h6>Blaise Rogeau</h6>
                                    <span>41 Pt</span>
                                </td>
                                <td>
                                    <span class="c-logo">C</span>
                                    <p>0.55%</p>
                                </td>
                                <td>
                                    <span class="c-logo">VC</span>
                                    <p>0.37%</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="player-dp">
                                    <div class="player-dp-inner player-dp-inner4"></div>
                                </td>
                                <td>
                                    <h6>Blaise Rogeau</h6>
                                    <span>41 Pt</span>
                                </td>
                                <td>
                                    <span class="c-logo">C</span>
                                    <p>0.55%</p>
                                </td>
                                <td>
                                    <span class="c-logo">VC</span>
                                    <p>0.37%</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="player-dp">
                                    <div class="player-dp-inner player-dp-inner5"></div>
                                </td>
                                <td>
                                    <h6>Blaise Rogeau</h6>
                                    <span>41 Pt</span>
                                </td>
                                <td>
                                    <span class="c-logo">C</span>
                                    <p>0.55%</p>
                                </td>
                                <td>
                                    <span class="c-logo">VC</span>
                                    <p>0.37%</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="player-dp">
                                    <div class="player-dp-inner player-dp-inner6"></div>
                                </td>
                                <td>
                                    <h6>Blaise Rogeau</h6>
                                    <span>41 Pt</span>
                                </td>
                                <td>
                                    <span class="c-logo">C</span>
                                    <p>0.55%</p>
                                </td>
                                <td>
                                    <span class="c-logo">VC</span>
                                    <p>0.37%</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="team-btns">
                    <a href="#" class="next-btn">K ochraně</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection

@section('custom-script')

<script>
   $(document).ready(function(){
     @if(Session::has('success'))
       var flashMessage = "<?= Session::get('success') ?>";
       $("#success-message").html(flashMessage)
       $("#successModal").modal('show');
     @endif

     var myTeam = @json($myTeam);

     $('.div-tbl tbody tr').each(function() {
        var row = $(this);

        // Retrieve data attributes from the row
        var leagueId = row.find('.team_captain').data('league_id');
        var matchId = row.find('.team_captain').data('match_id');
        var teamId = row.find('.team_captain').data('team_id');
        var playerId = row.find('.team_captain').data('player_id');

        // Check for captain status
        var isCaptain = myTeam.some(function(player) {
            return player.league_id == leagueId &&
                   player.match_id == matchId &&
                   player.team_id == teamId &&
                   player.player_id == playerId &&
                   player.is_captain == '1';
        });

        // Check for vice-captain status
        var isViceCaptain = myTeam.some(function(player) {
            return player.league_id == leagueId &&
                   player.match_id == matchId &&
                   player.team_id == teamId &&
                   player.player_id == playerId &&
                   player.is_vice_captain == '1';
        });

        // Show or hide buttons based on the player status
        if (isCaptain) {
            row.find('.team_captain .plus').addClass('d-none');
            row.find('.team_captain .minus').removeClass('d-none');
        } else {
            row.find('.team_captain .plus').removeClass('d-none');
            row.find('.team_captain .minus').addClass('d-none');
        }

        if (isViceCaptain) {
            row.find('.team_vice_captain .plus').addClass('d-none');
            row.find('.team_vice_captain .minus').removeClass('d-none');
        } else {
            row.find('.team_vice_captain .plus').removeClass('d-none');
            row.find('.team_vice_captain .minus').addClass('d-none');
        }
    });

     $('#login-click').on('click',function(){
        window.location.href = "{{ route('login') }}";
     })

     $('#save-team-btn').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('auth.check') }}",
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(data) {

             if(data.captain != true){
                  var flashMessage = "Please select a captain.";
                  $("#cap-message").html(flashMessage);
                  $("#capModal").modal('show');
                  return false;
             }else if(data.vice_captain != true){
                  var flashMessage = "Please select a vice captain.";
                  $("#cap-message").html(flashMessage);
                  $("#capModal").modal('show');
                  return false;
             }else if(data.error == false){
                  var flashMessage = "You need to log in before making a team.";
                  $("#login-message").html(flashMessage)
                  $("#loginModal").modal('show');
             }else{
               window.location.href = "{{ route('save-team') }}";
             }
            }
        });
    });

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

      $(document).on('click', '.player-toggle', function() {
         var button = $(this);

         var league_id = button.closest('p').data('league_id');
         var match_id = button.closest('p').data('match_id');
         var team_id = button.closest('p').data('team_id');
         var player_id = button.closest('p').data('player_id');

         if (button.hasClass('captain-plus')) {
            var visibleMinusCount = $('.captain-minus').not('.d-none').length;

            if (visibleMinusCount >= 1) {
               var flashMessage = "Captain already selected.";
               $("#cap-message").html(flashMessage);
               $("#capModal").modal('show');
               return false;
            }
         }

         if (button.hasClass('vice-cap-plus')) {
            var visibleMinusCount = $('.vice-cap-minus').not('.d-none').length;

            if (visibleMinusCount >= 1) {
               var flashMessage = "Vice Captain already selected.";
               $("#cap-message").html(flashMessage);
               $("#capModal").modal('show');
               return false;
            }
         }

         var event = $(this).data('event');

         var formData = {
            event : event,
            league_id : league_id,
            match_id : match_id,
            team_id : team_id,
            player_id : player_id,
         };

         $.ajax({
            url: "{{ route('make.captain') }}",
            type: 'POST',
            data: formData,
            success: function(response) {

               if(event == 'cap_plus'){

                  button.addClass('d-none');
                  button.closest('td').find('.minus').removeClass('d-none');

               }else if(event == 'cap_minus'){

                  button.addClass('d-none');
                  button.closest('td').find('.plus').removeClass('d-none');

               }

               if(event == 'vice_plus'){

                button.addClass('d-none');
                button.closest('td').find('.minus').removeClass('d-none');

               }else if(event == 'vice_minus'){

                  button.addClass('d-none');
                  button.closest('td').find('.plus').removeClass('d-none');

               }
            },
            error: function(xhr, status, error) {
                  console.error('Error:', error);
            }
         });
      });

   });
</script>


@endsection