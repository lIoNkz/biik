<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBTextRequest;
use App\Http\Requests\UpdateBTextRequest;
use App\Repositories\BTextRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\BText;

class BTextController extends AppBaseController
{
    /** @var  BTextRepository */
    private $bTextRepository;

    public function __construct(BTextRepository $bTextRepo)
    {
        $this->bTextRepository = $bTextRepo;
    }

    /**
     * Display a listing of the BText.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bTextRepository->pushCriteria(new RequestCriteria($request));
        $bTexts = $this->bTextRepository->all();

        return view('b_texts.index')
            ->with('bTexts', $bTexts);
    }

    /**
     * Show the form for creating a new BText.
     *
     * @return Response
     */
    public function create($id = '')
    {
        return view('b_texts.create')->with('block_id', $id);
    }

    public function show_texts($id)
    {
        $bTexts = BText::where('textable_id', $id)->get();

        return view('b_texts.index', compact('bTexts'))->with('block_id', $id);
    }
    /**
     * Store a newly created BText in storage.
     *
     * @param CreateBTextRequest $request
     *
     * @return Response
     */
    public function store(CreateBTextRequest $request, $id = '')
    {
        $input = $request->all();

        $bText = $this->bTextRepository->create($input);

        Flash::success('B Text saved successfully.');

        return redirect('/blocks/show_texts/'.$id);
    }

    /**
     * Display the specified BText.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bText = $this->bTextRepository->findWithoutFail($id);

        if (empty($bText)) {
            Flash::error('B Text not found');

            return redirect(route('bTexts.index'));
        }

        return view('b_texts.show')->with('bText', $bText);
    }

    /**
     * Show the form for editing the specified BText.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id, $block_id)
    {
        $bText = $this->bTextRepository->findWithoutFail($id);

        if (empty($bText)) {
            Flash::error('B Text not found');

            return redirect(route('bTexts.index'));
        }

        return view('b_texts.edit')->with(['bText' => $bText, 'block_id' => $block_id]);
    }

    /**
     * Update the specified BText in storage.
     *
     * @param  int              $id
     * @param UpdateBTextRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBTextRequest $request, $block_id)
    {
        $bText = $this->bTextRepository->findWithoutFail($id);

        if (empty($bText)) {
            Flash::error('B Text not found');

            return redirect('/blocks/show_texts/'.$block_id);
        }

        $bText = $this->bTextRepository->update($request->all(), $id);

        Flash::success('B Text updated successfully.');

        return redirect('/blocks/show_texts/'.$block_id);
    }

    /**
     * Remove the specified BText from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id, $block_id)
    {
        $bText = $this->bTextRepository->findWithoutFail($id);

        if (empty($bText)) {
            Flash::error('B Text not found');

            return redirect(route('bTexts.index'));
        }

        $this->bTextRepository->delete($id);

        Flash::success('B Text deleted successfully.');

        return redirect('/blocks/show_texts/'.$block_id);
    }
}
