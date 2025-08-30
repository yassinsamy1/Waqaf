<?php

namespace App\Http\Controllers;

use App\Models\WaqafApplication;
use Illuminate\Http\Request;

class WaqafApplicationController extends Controller
{
    public function index()
    {
        $applications = WaqafApplication::orderBy('created_at', 'asc')->paginate(10);
        return view('waqaf.index', compact('applications'));
    }

    public function create()
    {
        return view('waqaf.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_syarikat' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tarikh_lafaz' => 'required|date',
            'jenis_wakaf' => 'required|in:wakaf_khas,wakaf_saraan,wakaf_am',
            'tujuan' => 'required|string',
            'mukim' => 'required|string|max:255',
            'daerah' => 'required|string|max:255',
            'hakmilik' => 'required|string|max:255',
            'no_lot' => 'required|string|max:255',
            'luas_tanah' => 'required|string|max:255',
            'pengarah_1_nama' => 'required|string|max:255',
            'pengarah_1_ic' => 'required|string|max:20',
            'pengarah_2_nama' => 'required|string|max:255',
            'pengarah_2_ic' => 'required|string|max:20',
        ]);

        $booleanFields = [
            'check_borang', 'check_ic', 'check_ssm', 'check_hakmilik',
            'check_cukai', 'check_taksiran', 'check_akuan', 'check_pelan'
        ];
        
        foreach ($booleanFields as $field) {
            $validatedData[$field] = $request->has($field);
        }

        $validatedData = array_merge($validatedData, $request->only([
            'pengesah_1_nama', 'pengesah_1_tel', 'pengesah_2_nama', 'pengesah_2_tel',
            'wakaf_khas_detail', 'wakaf_saraan_detail', 'wakaf_am_detail',
            'tarikh_qabul', 'tarikh_hijri', 'tahun_qabul',
            'bhg_diwakaf', 'luas_diwakaf', 'baki_tanah',
            'pengarah_1_tarikh', 'pengarah_2_tarikh',
            'saksi_1_nama', 'saksi_1_ic', 'saksi_1_tarikh',
            'saksi_2_nama', 'saksi_2_ic', 'saksi_2_tarikh',
            'hakim_nama', 'hakim_ic'
        ]));

        $application = WaqafApplication::create($validatedData);

        return redirect()->route('waqaf.show', $application)
                        ->with('success', 'Permohonan wakaf berjaya disimpan.');
    }

    public function show(WaqafApplication $waqaf)
    {
        return view('waqaf.show', compact('waqaf'));
    }

    public function edit(WaqafApplication $waqaf)
    {
        return view('waqaf.edit', compact('waqaf'));
    }

    public function update(Request $request, WaqafApplication $waqaf)
    {
        $validatedData = $request->validate([
            'no_syarikat' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tarikh_lafaz' => 'required|date',
            'jenis_wakaf' => 'required|in:wakaf_khas,wakaf_saraan,wakaf_am',
            'tujuan' => 'required|string',
            'mukim' => 'required|string|max:255',
            'daerah' => 'required|string|max:255',
            'hakmilik' => 'required|string|max:255',
            'no_lot' => 'required|string|max:255',
            'luas_tanah' => 'required|string|max:255',
            'pengarah_1_nama' => 'required|string|max:255',
            'pengarah_1_ic' => 'required|string|max:20',
            'pengarah_2_nama' => 'required|string|max:255',
            'pengarah_2_ic' => 'required|string|max:20',
        ]);

        $booleanFields = [
            'check_borang', 'check_ic', 'check_ssm', 'check_hakmilik',
            'check_cukai', 'check_taksiran', 'check_akuan', 'check_pelan'
        ];
        
        foreach ($booleanFields as $field) {
            $validatedData[$field] = $request->has($field);
        }

        $validatedData = array_merge($validatedData, $request->only([
            'pengesah_1_nama', 'pengesah_1_tel', 'pengesah_2_nama', 'pengesah_2_tel',
            'wakaf_khas_detail', 'wakaf_saraan_detail', 'wakaf_am_detail',
            'tarikh_qabul', 'tarikh_hijri', 'tahun_qabul',
            'bhg_diwakaf', 'luas_diwakaf', 'baki_tanah',
            'pengarah_1_tarikh', 'pengarah_2_tarikh',
            'saksi_1_nama', 'saksi_1_ic', 'saksi_1_tarikh',
            'saksi_2_nama', 'saksi_2_ic', 'saksi_2_tarikh',
            'hakim_nama', 'hakim_ic'
        ]));

        $waqaf->update($validatedData);

        return redirect()->route('waqaf.show', $waqaf)
                        ->with('success', 'Permohonan wakaf berjaya dikemaskini.');
    }

    public function destroy(WaqafApplication $waqaf)
    {
        $waqaf->delete();
        
        return redirect()->route('waqaf.index')
                        ->with('success', 'Permohonan wakaf berjaya dipadamkan.');
    }

    public function print(WaqafApplication $waqaf)
    {
        return view('waqaf.print', compact('waqaf'));
    }
}
