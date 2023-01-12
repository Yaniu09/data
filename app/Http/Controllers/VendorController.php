<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Number;
use App\Models\Sector;
use App\Http\Requests\StoreVendorRequest;
use App\Http\Requests\UpdateVendorRequest;
use Illuminate\Http\Request;

class VendorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $sector = Sector::all();
    $numbers = Number::paginate(20);

    return view('vendor', compact('sector', 'numbers'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreVendorRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'party' => 'required',
      'purpose' => 'required',
      'type' => 'required',
      'sector_code' => 'required',
    ]);

    $sector = Sector::where('code', $request->sector_code)->first();
    $number = $sector->last_number + 1;
    $year = date('y');
    $sector_code = strtoupper($request->sector_code);

    $letter_no = "{$sector_code}/{$request->type}/{$year}/{$number}";
    $sector->last_number = $number;
    $sector->save();

    $number = Number::create([
      'lno' => $letter_no,
      'party' => $request->party,
      'purpose' => $request->purpose,
      'sector_code' => $request->sector_code,
    ]);

    $msg = "Number Has Been successfully Generated - {$letter_no}";

    return redirect()->route('vendor.index')->with('alert-success', $msg);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Vendor  $vendor
   * @return \Illuminate\Http\Response
   */
  public function show(Vendor $vendor)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Vendor  $vendor
   * @return \Illuminate\Http\Response
   */
  public function edit(Vendor $vendor)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateVendorRequest  $request
   * @param  \App\Models\Vendor  $vendor
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateVendorRequest $request, Vendor $vendor)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Vendor  $vendor
   * @return \Illuminate\Http\Response
   */
  public function destroy(Vendor $vendor)
  {
    //
  }
}
