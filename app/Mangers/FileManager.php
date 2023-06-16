<?php 

class FileManager
{
    protected $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function listFiles()
    {
        return $this->storage->files('public');
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('file');
        $path = $this->storage->putFile('public', $file);

        return $path;
    }

    public function deleteFile($path)
    {
        $this->storage->delete($path);
    }
}