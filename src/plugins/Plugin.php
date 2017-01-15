<?php

/**
 * Created by PhpStorm.
 * User: beroberts
 * Date: 1/13/17
 * Time: 4:18 PM
 */

namespace WF\Hypernova\Plugins;

interface Plugin
{
    /**
     * @param mixed $data
     * @return mixed $data
     */
    public function getViewData($name, $data);

    /**
     * @param \WF\Hypernova\Job $request
     * @return \WF\Hypernova\Job
     */
    public function prepareRequest($request);

    /**
     * @param \WF\Hypernova\Job[] $jobs
     * @return bool
     */
    public function shouldSendRequest($jobs);

    /**
     * @param \WF\Hypernova\Job[] $jobs
     *
     * @return void
     */
    public function willSendRequest($jobs);

    /**
     * @param \Exception|mixed $error
     * @param \WF\Hypernova\Job[] $jobOrJobs
     *
     * @return void
     */
    public function onError($error, array $jobOrJobs);

    /**
     * @param \WF\Hypernova\JobResult $jobResult
     *
     * @return void
     */
    public function onSuccess($jobResult);

    public function afterResponse($currentResponse, $originalResponse);
}