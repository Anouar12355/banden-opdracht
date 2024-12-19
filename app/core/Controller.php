<?php
class Controller {
    /**
     * Render a view
     *
     * @param string $view The view file to render
     * @param array $data Data to pass to the view
     * @return void
     */
    protected function view($view, $data = []) {
        // Extract data voor gebruik in view
        if (!empty($data)) {
            extract($data);
        }

        // Check of view file bestaat
        $viewFile = "app/views/{$view}.php";
        if (!file_exists($viewFile)) {
            throw new Exception("View {$view} not found");
        }

        // Include de view file
        require $viewFile;
    }

    /**
     * Redirect to another URL
     *
     * @param string $url
     * @return void
     */
    protected function redirect($url) {
        header("Location: {$url}");
        exit();
    }

    /**
     * Return JSON response
     *
     * @param mixed $data
     * @param int $statusCode
     * @return void
     */
    protected function json($data, $statusCode = 200) {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }
}