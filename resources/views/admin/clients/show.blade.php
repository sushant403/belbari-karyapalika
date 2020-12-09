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
                            </a>
                            @endforeach
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