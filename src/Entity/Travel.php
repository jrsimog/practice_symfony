<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Travel
 *
 * @ORM\Table(name="travel", uniqueConstraints={@ORM\UniqueConstraint(name="fk_transport_idx", columns={"transport_fk"}), @ORM\UniqueConstraint(name="fk_notification_idx", columns={"notification_fk"}), @ORM\UniqueConstraint(name="fk_driver_idx", columns={"driver_fk"}), @ORM\UniqueConstraint(name="fk_vehicle_idx", columns={"vehicle_fk"})})
 * @ORM\Entity
 */
class Travel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="start_date", type="string", length=45, nullable=true)
     */
    private $startDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="end_date", type="string", length=45, nullable=true)
     */
    private $endDate;

    /**
     * @var \Driver
     *
     * @ORM\ManyToOne(targetEntity="Driver")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="driver_fk", referencedColumnName="id")
     * })
     */
    private $driverFk;

    /**
     * @var \Notification
     *
     * @ORM\ManyToOne(targetEntity="Notification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_fk", referencedColumnName="id")
     * })
     */
    private $notificationFk;

    /**
     * @var \Transport
     *
     * @ORM\ManyToOne(targetEntity="Transport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transport_fk", referencedColumnName="id")
     * })
     */
    private $transportFk;

    /**
     * @var \Vehicle
     *
     * @ORM\ManyToOne(targetEntity="Vehicle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vehicle_fk", referencedColumnName="id")
     * })
     */
    private $vehicleFk;


}
