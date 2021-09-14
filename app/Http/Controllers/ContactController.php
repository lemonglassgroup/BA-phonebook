<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactShareRequest;
use App\Models\Contact;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        /**
         * @var User $user
         */
        $user = Auth::user();

        return view('contacts.index', [
            'contacts' => $user->contacts()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(): Redirector|RedirectResponse|Application
    {
        /**
         * @var User $user
         */
        $user = Auth::user();

        $user->contacts()->save(Contact::create([
            'name'  => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
        ]));

        return redirect(route('contacts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
//    public function show(int $id): void
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return Application|Factory|View
     */
    public function edit(Contact $contact): View|Factory|Application
    {
        return view('contacts.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Contact $contact
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Contact $contact): Redirector|RedirectResponse|Application
    {
        $contact->update([
            'name'  => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
        ]);

        $contact->save();

        return redirect(route('contacts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(int $id): Redirector|RedirectResponse|Application
    {
        Contact::destroy($id);

        return redirect(route('contacts.index'));
    }

    public function getShareForm(Contact $contact)
    {
        return view('contacts.share')->with('contact', $contact);
    }

    public function share(Contact $contact, ContactShareRequest $request)
    {
        $user = User::firstWhere('email', $request->validated()['email']);

        $user->contacts()->save($contact);

        return redirect(route('contacts.index'));
    }
}
