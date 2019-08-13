@extends('character.layout', ['isMyo' => $character->is_myo_slot])

@section('profile-title') {{ $character->fullName }}'s Ownership History @endsection

@section('profile-content')
{!! breadcrumbs(['Masterlist' => 'masterlist', $character->fullName => $character->url, 'Ownership History' => $character->url.'/ownership']) !!}

@include('character._header', ['character' => $character])

<h3>Ownership History</h3>

{!! $logs->render() !!}
<table class="table table-sm">
    <thead>
        <th>Sender</th>
        <th>Recipient</th>
        <th>Log</th>
        <th>Date</th>
    </thead>
    <tbody>
        @foreach($logs as $log)
            {!! $log->displayRow($character) !!}
        @endforeach
    </tbody>
</table>
{!! $logs->render() !!}

@endsection
