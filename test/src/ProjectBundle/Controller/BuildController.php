<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 11/04/16
 * Time: 13:00
 */

namespace ProjectBundle\Controller;
use ProjectBundle\Entity\Projet;
use ProjectBundle\Entity\Build;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use AppBundle\Core\ApiResponse;

    /**
     * Class ApiLegalController for legal pages
     *
     * @package Controller
     * @author Fondative <devteam@fondative.com>
     * @copyright 2015-2016 Fondative
     * @version 1.0.0
     * @since Class available since Release 1.0.0
     *
     */
/**
 * @RouteResource("build")
 */

class BuildController extends Controller
{

    /**
     * Get project
     *
     * @ApiDoc(
     *      section="3. Build Services",
     *     description="Get builds",
     *      parameters={
     *
     *     {"name"="project", "dataType"="intiger", "required"=true, "description"="id of project"},
     *
     *       },
     *
     *     statusCodes={
     *          200={
     *            "200"="The request has succeeded"
     *            },
     *        400={
     *            "40041"="Project not found",
     *            },
     *        500={
     *            "5001"="An internal error has occurred"
     *            }
     *
     *     }
     * )
     */
    public function cgetAction(Request $req)
    {
        $projectManager = $this->get('test_project.build_manager');
        $build = $projectManager->loadBuildsByProject($req);
        if ($build != null )
            return new ApiResponse( $build,200);
        else
            return new ApiResponse( null,400);

    }



    /**
     * Get project
     *
     * @ApiDoc(
     *     section="3. Build Services",
     *     description="Get build",
     *     requirements={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="Id Project"},
     *      },
     *     statusCodes={
     *          200={
     *            "200"="The request has succeeded"
     *            },
     *        400={
     *            "40041"="Build not found",
     *            },
     *        500={
     *            "5001"="An internal error has occurred"
     *            }
     *
     *     }
     * )
     */
    public function getAction($id, Request $request)
    {
        $buildManager = $this->get('test_project.build_manager');
        $build = $buildManager->loadBuildById($id);
        if ($build != null )
            return new ApiResponse( $build,200);
        else
            return new ApiResponse( null,400);

    }


    /**
     * Post Project
     *
     * @ApiDoc(
     *     section="3. Build Services",
     *     description="Post Build",
     *      parameters={
     *      {"name"="name", "dataType"="string", "required"=true, "description"="Name of project"},
     *     {"name"="project", "dataType"="intiger", "required"=true, "description"="id of project"},
     *
     *       },
     *
     *     statusCodes={
     *        201={
     *            "201"="The request has succeeded"
     *            },
     *        400={
     *             "40074"="Build not found",
     *            },
     *        403={
     *             "40311"="Denied access to Project"
     *            },
     *        500={
     *            "5001"="An internal error has occurred"
     *            }
     *
     *     }
     * )
     */

    public function postAction(Request $req)
    {
        $buildManager = $this->get('test_project.build_manager');
        $build = $buildManager->createBuildFromRequest($req);
        if ( $buildManager->buildValidation($build) )
        {
            $buildManager->addBuild($build);
            return new ApiResponse( $build,201);
        }
        else
            return new ApiResponse( $build, 400);


    }

}