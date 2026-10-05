<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('services.index');
    }

    public function create(): View
    {
        return view('services.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    public function edit($service): View
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $service): RedirectResponse
    {
        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy($service): RedirectResponse
    {
        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
