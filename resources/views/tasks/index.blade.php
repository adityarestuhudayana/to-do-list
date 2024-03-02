@extends('template.main')

@section('container')
    <h1>Halaman Tasks</h1>
    <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center">
        <div class="list-group"\>
            <label class="list-group-item d-flex gap-3">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked
                    style="font-size: 1.375em;">
                <span class="pt-1 form-checked-content">
                    <strong>Finish sales report</strong>
                    <small class="d-block text-body-secondary">
                        <svg class="bi me-1" width="1em" height="1em">
                            <use xlink:href="#calendar-event" />
                        </svg>
                        1:00–2:00pm
                    </small>
                </span>
            </label>
            <label class="list-group-item d-flex gap-3">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="" style="font-size: 1.375em;">
                <span class="pt-1 form-checked-content">
                    <strong>Weekly All Hands</strong>
                    <small class="d-block text-body-secondary">
                        <svg class="bi me-1" width="1em" height="1em">
                            <use xlink:href="#calendar-event" />
                        </svg>
                        2:00–2:30pm
                    </small>
                </span>
            </label>
            <label class="list-group-item d-flex gap-3">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="" style="font-size: 1.375em;">
                <span class="pt-1 form-checked-content">
                    <strong>Out of office</strong>
                    <small class="d-block text-body-secondary">
                        <svg class="bi me-1" width="1em" height="1em">
                            <use xlink:href="#alarm" />
                        </svg>
                        Tomorrow
                    </small>
                </span>
            </label>
            <label class="list-group-item d-flex gap-3 bg-body-tertiary">
                <input class="form-check-input form-check-input-placeholder bg-body-tertiary flex-shrink-0 pe-none" disabled
                    type="checkbox" value="" style="font-size: 1.375em;">
                <span class="pt-1 form-checked-content">
                    <span contenteditable="true" class="w-100">Add new task...</span>
                    <small class="d-block text-body-secondary">
                        <svg class="bi me-1" width="1em" height="1em">
                            <use xlink:href="#list-check" />
                        </svg>
                        Choose list...
                    </small>
                </span>
            </label>
        </div>
    </div>
@endsection
