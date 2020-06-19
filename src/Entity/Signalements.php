<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SignalementsRepository")
 * Signalements
 *
 * @ORM\Table(name="signalements")
 * @ORM\Entity
 */
class Signalements
{
    /**
     * 
     * @var int
     *
     * @ORM\Column(name="signalement_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $signalementId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="channel_name", type="string", length=150, nullable=false)
     */
    private $channelName;

    /**
     * @var string
     *
     * @ORM\Column(name="url_stream", type="string", length=255, nullable=false)
     */
    private $urlStream;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=100, nullable=false)
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="channel_id", type="string", length=255, nullable=false)
     */
    private $channelId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_stream", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateStream = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    public function getSignalementId(): ?int
    {
        return $this->signalementId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getChannelName(): ?string
    {
        return $this->channelName;
    }

    public function setChannelName(string $channelName): self
    {
        $this->channelName = $channelName;

        return $this;
    }

    public function getUrlStream(): ?string
    {
        return $this->urlStream;
    }

    public function setUrlStream(string $urlStream): self
    {
        $this->urlStream = $urlStream;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    public function getDateStream(): ?\DateTimeInterface
    {
        return $this->dateStream;
    }

    public function setDateStream(\DateTimeInterface $dateStream): self
    {
        $this->dateStream = $dateStream;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }


}
