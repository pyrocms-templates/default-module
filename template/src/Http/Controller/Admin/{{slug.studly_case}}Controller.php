<?php namespace {{vendor|studly_case}}\{{slug|studly_case}}Module\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class {{slug|studly_case}}Controller
 *
{{docblock}}
 * @package   {{vendor|studly_case}}\{{slug|studly_case}}Module\Http\Controller\Admin
 */

class {{slug|studly_case}}Controller extends AdminController
{
  /**
   * Return admin home view.
   *
   * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
    return moduleView('admin.home', ['readme' => strip_tags(file_get_contents(modulePath('README.md')))]);
  }
}
