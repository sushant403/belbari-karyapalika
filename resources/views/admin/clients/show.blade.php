@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.client.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.id') }}
                        </th>
                        <td>
                            {{ $client->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.name') }}
                        </th>
                        <td>
                            {{ $client->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.registration') }} Number
                        </th>
                        <td>
                            {{ $client->registration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.address') }}
                        </th>
                        <td>
                            {{ $client->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.phone') }}
                        </th>
                        <td>
                            {{ $client->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.main_photo') }}
                        </th>
                        <td>
                            @if($client->main_photo)
                            <a href="{{ $client->main_photo->getUrl() }}" target="_blank">
                                <img src="{{ $client->main_photo->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Client's Signature
                        </th>
                        <td>
                            @if($client->client_signature)
                            <a href="{{ $client->client_signature->getUrl() }}" target="_blank">
                                <img src="{{ $client->client_signature->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.gallery') }}
                        </th>
                        <td>
                            @foreach($client->gallery as $key => $media)
                            <a href="{{ $media->getUrl() }}" target="_blank">
                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                            </a>&nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Consultancy Documents
                        </th>
                        <td>
                            @foreach($client->consultancy as $key => $media)
                            <a href="{{ $media->getUrl() }}" target="_blank">
                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                            </a>&nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            15 Days Notice
                        </th>
                        <td>
                            @foreach($client->days_notice as $key => $media)
                            <a href="{{ $media->getUrl() }}" target="_blank">
                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                            </a>&nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            First Acceptance Letter
                        </th>
                        <td>
                            @foreach($client->acceptance1 as $key => $media)
                            <a href="{{ $media->getUrl() }}" target="_blank">
                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                            </a>&nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Second Acceptance Letter
                        </th>
                        <td>
                            @foreach($client->acceptance2 as $key => $media)
                            <a href="{{ $media->getUrl() }}" target="_blank">
                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                            </a>&nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Final Documentations
                        </th>
                        <td>
                            @foreach($client->finaldocs as $key => $media)
                            <a href="{{ $media->getUrl() }}" target="_blank">
                                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                            </a>&nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Neighbour One's Details
                        </th>
                        <td>
                            {{ $client->neighbour1 }} &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($client->neighbour1_sign)
                            <a href="{{ $client->neighbour1_sign->getUrl() }}" target="_blank">
                                <img src="{{ $client->neighbour1_sign->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Neighbour Two's Details
                        </th>
                        <td>
                            {{ $client->neighbour2 }} &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($client->neighbour2_sign)
                            <a href="{{ $client->neighbour2_sign->getUrl() }}" target="_blank">
                                <img src="{{ $client->neighbour2_sign->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Neighbour Three's Details
                        </th>
                        <td>
                            {{ $client->neighbour3 }} &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($client->neighbour3_sign)
                            <a href="{{ $client->neighbour3_sign->getUrl() }}" target="_blank">
                                <img src="{{ $client->neighbour3_sign->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Verified By
                        </th>
                        <td>
                            {{ $client->verified_by }} &nbsp;&nbsp;&nbsp;&nbsp;
                            @if($client->verified_sign)
                            <a href="{{ $client->verified_sign->getUrl() }}" target="_blank">
                                <img src="{{ $client->verified_sign->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection