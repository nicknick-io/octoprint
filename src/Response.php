<?php
namespace NickNickIO\Octoprint;

class Response
{
    private $responses = [
        200 => 'Success',
        204 => 'No content',
        400 => 'Bad request'
    ];

    public $response;

    /**
     * Response constructor.
     * @param int $code
     */
    public function __construct(int $code)
    {
        if (!in_array($code, $this->responses)) {
            $this->response = (object)[
                'code' => $code,
                'message' => 'Unknown error thrown, please implement this one..'
            ];
        }

        $this->response = (object)[
            'code' => $code,
            'message' => $this->responses[$code]
        ];
    }
}