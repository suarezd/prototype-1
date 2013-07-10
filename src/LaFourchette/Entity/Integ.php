<?php

namespace LaFourchette\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Integ
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_integ")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $idInteg;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name = null;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $suffix;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $path;

    /**
     * @ORM\Column(type="string")
     * @var null|string
     */
    protected $server;

    /**
     * @ORM\Column(type="string", name="ssh_key")
     * @var string
     */
    protected $sshKey;

    /**
     * @ORM\Column(type="string", name="ssh_user")
     * @var string
     */
    protected $sshUser;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $ip;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $mac;

    /**
     * @ORM\Column(type="string", name="github_key")
     * @var string
     */
    protected $githubKey;

    /**
     * @ORM\ManyToOne(targetEntity="LaFourchette\Entity\Vm")
     * @ORM\JoinColumn(name="id_integ", referencedColumnName="id_vm")
     * @var object
     */
    protected $vm;
    

    public function getIdInteg()
    {
        return $this->idInteg;
    }

    public function setIdInteg($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSuffix()
    {
        return $this->suffix;
    }

    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getServer()
    {
        return $this->server;
    }

    public function setServer($server)
    {
        $this->server = $server;
    }

    public function getSshKey()
    {
        return $this->sshKey;
    }

    public function setSshKey($sshKey)
    {
        $this->sshKey = $sshKey;
    }

    public function getSshUser()
    {
        return $this->sshUser;
    }

    public function setSshUser($sshUser)
    {
        $this->sshUser = $sshUser;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getMac()
    {
        return $this->mac;
    }

    public function setMac($mac)
    {
        $this->mac = $mac;
    }

    public function getGithubKey()
    {
        return $this->githubKey;
    }

    public function setGithubKey($githubKey)
    {
        $this->githubKey = $githubKey;
    }

}
