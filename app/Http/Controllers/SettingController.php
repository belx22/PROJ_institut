<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $setting = Setting::first() ?? new Setting();
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'header_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'promoteur_message' => 'required|string|max:500',
            'flyer_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'rentree_date' => 'required|date',
        ]);
    
        $setting = Setting::first() ?? new Setting();
    
        if ($request->hasFile('header_image')) {
            // Enregistrement du fichier dans storage/app/public/settings
            $path = $request->file('header_image')->store('settings', 'public');
            $validated['header_image'] = $path;
    
            // Sauvegarder l'extension (optionnel)
            $validated['header_image_extension'] = $request->file('header_image')->getClientOriginalExtension();
        }
    
        if ($request->hasFile('flyer_image')) {
            // Enregistrement du fichier dans storage/app/public/settings
            $path = $request->file('flyer_image')->store('settings', 'public');
            $validated['flyer_image'] = $path;
    
            // Sauvegarder l'extension (optionnel)
            $validated['flyer_image_extension'] = $request->file('flyer_image')->getClientOriginalExtension();
        }
        if ($request->hasFile('logo_image')) {
            // Enregistrement du fichier dans storage/app/public/settings
            $path = $request->file('logo_image')->store('settings', 'public');
            $validated['logo_image'] = $path;
    
            // Sauvegarder l'extension (optionnel)
            $validated['logo_image_extension'] = $request->file('logo_image')->getClientOriginalExtension();
        }
    
        $setting->fill($validated)->save();
    
        return redirect()->route('settings.edit')->with('success', 'Paramètres mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(setting $setting)
    {
        //
    }
}
